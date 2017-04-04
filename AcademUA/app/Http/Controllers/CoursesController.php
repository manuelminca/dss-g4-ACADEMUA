<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;

class CoursesController extends Controller
{



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
		return view('/courses/courses', ['courses' => $list])->with('courses', $list);
	}
	
	public function deleteCourse($id){
		$course = Course::findOrFail($id);
		$course->deleteCourse();
	}
	
	public function showCourses(){
		$list = Course::paginate(6);
		
		return view('/courses/courses', ['courses' => $list])->with('courses', $list);
	}
	
	//Mostramos cursos filtrando
	public function showCoursesFilter(Request $request){
		$filter = $_GET["filter"];
		$course = new Course();
		$valor = $request->input('valor');
		$list = $course->showCoursesFilter($filter, $valor)->paginate(6);
		
		return view('/courses/courses', ['courses' => $list]);
	}
	
	
	
	public function createCourse(Request $request){
		
		$course = new Course();

		$this->validate($request,[
								    'name' => 'required',
								    'description' => 'required',
						            'price' => 'required | min:0 | numeric'
								]);
		
		$course->name= $request->input('name');
		$course->description= $request->input('description');
		$course->price= $request->input('price');
		$course->content= $request->input('content');
		$course->links= $request->input('links');
		$course->teacher_id= $request->input('id');
		
		$course->save();	
		return view('home');
	}
		
	public function attendCourse($course_id, $user_id){
		$course = Course::find($course_id);
		$user = User::find($user_id);
		$course->attendCourse($course->id, $user);
	}
	
}
