<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;
use App\Category;
use Illuminate\Support\Facades\Auth;
class CoursesController extends Controller
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
	
	//#	#############################################
	
	public function edit(Request $request, $id) {
		
		
		
		$course = Course::findOrFail($id);
		$this->validate($request,[
		
		'price' => 'min:0 | numeric'
						]);
		
		$name= $request->input('name');
		$description= $request->input('description');
		$price= $request->input('price');
		$content= $request->input('content');
		$links= $request->input('links');
		$teacher_id= $course->teacher_id;
		
		
		$course->createCourse($name,$description,$price,$content,$links,$teacher_id);
		
		$comments = $course->getComments($id);
		//r		eturns an array with all the comments
						return view('courses.course', ['comments' => $comments])->with('course', $course);
		
	}
	
	public function deleteCourse($id){
		//W		e have to redirect to Manage Courses but we need the session of the teacher(in progress)
		
		$course = Course::findOrFail($id);
		
		if($course->teacher_id == Auth::user()->id){
			$course->deleteCourse();
			
			$list = Course::paginate(6);
			return view('courses.courses', ['courses' => $list]);
			//W			e have to change that in the future
			
		}
		else{
			return view('home');
		}
	}
	
	public function showCourses(){
		$list = Course::paginate(6);
		
		return view('courses.courses', ['courses' => $list]);
	}
	
	//n	o sabemos como pasar dos variables
	
	
	public function showSingleCourse($id){
		$course = Course::find($id);
		$comments = $course->getComments($id);
		//r		eturns an array with all the comments
					return view('courses.course', ['comments' => $comments])->with('course', $course);
		
	}
	
	//M	ostramos cursos filtrando
			public function showCoursesFilter(Request $request){
		$filter = $_GET["filter"];
		if ($filter == 'precio_menor') {
			$this->validate($request,[
								'valor' => 'required | min:1 | numeric'
						]);
		}
		else {
			$this->validate($request,[
								'valor' => 'required'
						]);
		}
		
		
		$order = $_GET["order"];
		$how = $_GET["how"];
		$course = new Course();
		$valor = $request->input('valor');
		$list = $course->showCoursesFilter($filter, $valor, $order, $how)->paginate(6);
		
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
								'price' => 'required | min:0 | numeric'
						]);
		
		$name= $request->input('name');
		$description= $request->input('description');
		$price= $request->input('price');
		$content= $request->input('content');
		$links= $request->input('links');
		$teacher_id= Auth::user()->id;
		$categoryName = $request->input('category');
		
		
		$catModel = new Category();
		$categoryID = $catModel->getID($categoryName);
		
		
		$course->createCourse($name,$description,$price,$content,$links,$teacher_id);
		
		$course->attachCategory($categoryID);
		
		
		return view('home');
	}
	
	public function modifyCourse($course_id){
		$course = Course::find($course_id);
		
		if($course->teacher_id == Auth::user()->id){
			return view('/courses/modifyCourse')->with('courses', $course);
		}
		else{
			return view('home');
		}
		
	}
	
	
	public function attendCourse($course_id){
		$course = Course::find($course_id);
		$user = User::find(Auth::user()->id);
		$course->attendCourse($course->id, $user);
		$comments = $course->getComments($course_id);
		//returns an array with all the comments
		return view('courses.course', ['comments' => $comments])->with('course', $course);
	}
	
	
	public function appendLink($link){
		$course = new Course();
		$course->appendLink($link);
	}
	
	public static function splitLinks(){
		$course = new Course();
		$links = $course->getLinks();
		$arrayLinks = explode(';', $links);
		return $arrayLinks;
	}
	
	
}
