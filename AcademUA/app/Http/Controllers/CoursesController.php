<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;
use App\Category;
use App\Session;
use App\Comment;
use Illuminate\Support\Facades\Auth;
class CoursesController extends BaseController
{
	
	/*#############################################
				GETTERS AND SETTERS
	###############################################*/
	
	public function getCourses($teacher_id){
		$list = Course::where('teacher_id', '=', $teacher_id)->paginate(8);
		return view('courses.manageCourses', ['courses' => $list]);
	}
	
	public function getComments($course_id){
		$course = new Course();
		$list_comments = $course->getComments($course_id);
		return $list_comments;
	}
	
	
	public function getCategories($course_id){
		$course = new Course();
		$list_categories = $course->getCategories($course_id);
		return $list_categories;
	}


	
	/*#############################################
					  FUNCTIONS
	###############################################*/
	

	//It is not necessary to fulfill all the data from the form to update a course
	public function edit(Request $request, $id) {
		
		$course = Course::findOrFail($id);

		$name= $request->input('name');
		$description= $request->input('description');
		$price= $request->input('price');
		$content= $request->input('content');;
		
		$course->editCourse($name,$description,$price,$content);
		$comments = $course->getComments($id);
		$session = new Session();
		$sessions = $session->getSessions($id); 
		//returns an array with all the comments
		return view('courses.course', ['comments' => $comments])->with('course', $course)->with('sessions', $sessions);
	}
	
	//Its only the admin or the teacher that has created a course that can delete the course
	public function deleteCourse($id){
		//We have to redirect to Manage Courses but we need the session of the teacher(in progress)
		$filtering = false;
		$course = Course::findOrFail($id);
		
		if($course->teacher_id == Auth::user()->id){
			$course->deleteCourse();
			$list = Course::paginate(8);

			return redirect('/courses');			
		}
		else{
			return view('home');
		}
	}
	
	//Show courses with paginations
	public function showCourses(){
		$list = Course::paginate(8);
		$filtering = false;
		
		return view('courses.courses', ['courses' => $list])->with('filtering',$filtering);
	}
	
	//return a view with all the courses of a specific teacher
	public function showTeacherCourses($teacher_id){

		$list = Course::where('teacher_id',$teacher_id)->paginate(8);
		$filtering = false;		
		return view('courses.courses', ['courses' => $list])->with('filtering',$filtering);
	}
	
	//returns the view of a course
	public function showSingleCourse($id){
		$course = Course::find($id);
		$comments = $course->getComments($id);
		$session = new Session();
		$sessions = $session->getSessions($id); 
		//returns an array with all the comments
		return view('courses.course', ['comments' => $comments])->with('course', $course)->with('sessions', $sessions);
		
	}
	
		//It showes the courses using filters
		public function showCoursesFilter(Request $request){
		$filter = $_GET["filter"];
		if ($filter == 'precio_menor') {
			$this->validate($request,['valor' => 'required | min:1 | numeric']);
		}
		else {
			$this->validate($request,['valor' => 'required']);
		}
		
		$order = $_GET["order"];
		$how = $_GET["how"];
		$course = new Course();
		$valor = $request->input('valor');
		$list = $course->showCoursesFilter($filter, $valor, $order, $how);
		$filtering = true;
		
		return view('courses.courses', ['courses' => $list])->with('filter', $filter)->with('valor', $valor)->with('order',$order)->with('how',$how)->with('filtering',$filtering);
	}
	
	//create a new course view
	public function newCourse(){
		$cat = new Category();
		$categories= $cat->getAllCategories();
		return view('courses.createCourse')->with('categories', $categories);
	}


	//create course into the database
	public function createCourse(Request $request){
		$course = new Course();
		$this->validate($request,[
			'name' => 'required',
			'description' => 'required',
			'price' => 'required | min:-1 | numeric',
			'image' => 'required | mimes:jpeg,jpg,png | max:2000'
		]);
		
		$name= $request->input('name');
		$description= $request->input('description');
		$price= $request->input('price');
		$content= $request->input('content');
		$teacher_id= Auth::user()->id;
		$categoryName = $request->input('category');
		
		$catModel = new Category();
		$categoryID = $catModel->getID($categoryName);
		
		
		$course->createCourse($name,$description,$price,$content,$teacher_id);
		
		$course->attachCategory($categoryID);
		
		$idcourse = $course->id;
		$destination = "images/courses/";
		$request->file('image')->move($destination, $idcourse);
		
		return view('home');
	}
	
	//modify course
	public function modifyCourse($course_id){
		$course = Course::find($course_id);
		
		if($course->teacher_id == Auth::user()->id){
			return view('courses.modifyCourse')->with('courses', $course);
		}
		else{
			return view('home');
		}
		
	}
	
	
	public function attendCourse($course_id){
		
		$CoursesUser = Auth::user()->courses()->get();
		foreach ($CoursesUser as $course){
			if($course->id == $course_id){
				return $this->showSingleCourse($course_id);
			}
		}
		
		$course = Course::find($course_id);
		$user = User::find(Auth::user()->id);
		$course->attendCourse($course->id, $user);
		$comments = $course->getComments($course_id);

		$sessions = Session::where('course_id', $course_id)->paginate(1);

		return view('courses.course', ['comments' => $comments])->with('course', $course)->with('sessions', $sessions);		
		
	}

	//Deletes from the database CourseUser the user that is attending a course
	public function unAttendCourse($course_id){
			
		$course = Course::find($course_id);
		$user = User::find(Auth::user()->id);
		$course->unAttendCourse($course->id, $user);
		$comments = $course->getComments($course_id);
		//returns an array with all the comments

		$session = new Session();
		$sessions = Session::where('course_id', $course_id)->paginate(1);

		return view('courses.course', ['comments' => $comments])->with('course', $course)->with('sessions', $sessions);		
	}	
}
