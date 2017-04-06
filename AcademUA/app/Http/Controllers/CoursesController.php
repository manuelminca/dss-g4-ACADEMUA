<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;
use App\Category;
class CoursesController extends Controller
{
	
	/*#############################################
				GETTERS AND SETTERS
	###############################################*/

	public function getCourses($teacher_id){
		$course = new Course();
		$list_Courses = $course->getCourses($teacher_id);
		return view('courses.manageCourses')->with('courses', $list_Courses);
		
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

	//##############################################
	
	public function edit(Request $request, $id) {
		$this->validate($request,[
				'name' => 'required',
				'description' => 'required'
		]);
		
		$course = Course::findOrFail($id);
		$name = $request->input('name');
		$description = $request->input('description');
		$course -> edit($name, $description);
		$list = Course::paginate(6);

		return view('courses.courses', ['courses' => $list]);
	}
	
	public function deleteCourse($id){ //We have to redirect to Manage Courses but we need the session of the teacher(in progress)
		$course = Course::findOrFail($id);
		$course->deleteCourse();

		$list = Course::paginate(6);
		return view('courses.courses', ['courses' => $list]); //We have to change that in the future
	}
	
	public function showCourses(){
		$list = Course::paginate(6);
		
		return view('courses.courses', ['courses' => $list]);
	}

	//no sabemos como pasar dos variables


	public function showSingleCourse($id){
		$course = Course::find($id);
		$comments = $course->getComments($id); //returns an array with all the comments
	return view('courses.course', ['comments' => $comments])->with('course', $course);

	}
	
	//Mostramos cursos filtrando
	public function showCoursesFilter(Request $request){
		$filter = $_GET["filter"];
		$course = new Course();
		$valor = $request->input('valor');
		$list = $course->showCoursesFilter($filter, $valor)->paginate(6);
		
		return view('courses.courses', ['courses' => $list]);
	}
	
	
	public function newCourse(){
		$cat = new Category();
		$categories= $cat->getAllCategories();
		return view('courses.createCourse')->with('categories', $categories);
	}
	public function createCourse(Request $request){
		$course = new Course();
		$this->validate($request,[
				'name' => 'required',
				'description' => 'required',
				'id' => 'required',
				'price' => 'required | min:0 | numeric'
		]);
		
		$name= $request->input('name');
		$description= $request->input('description');
		$price= $request->input('price');
		$content= $request->input('content');
		$links= $request->input('links');
		$teacher_id= $request->input('id');
		$categoryName = $request->input('category');


		$catModel = new Category();
		$categoryID = $catModel->getID($categoryName);

		
		$course->createCourse($name,$description,$price,$content,$links,$teacher_id);
		
		$course->attachCategory($categoryID);
		

		return view('home');
	}
	
	
	public function attendCourse($course_id){
		$course = Course::find($course_id);
		$user = User::find($user_id);
		$course->attendCourse($user);
	}

	
}
