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
		if($request->has('name')){
			$course->name = $request->input('name');
			$course->description = $request->input('description');
			$course->save();
		}
		$list = Course::paginate(6);
		return view('/courses/courses', ['courses' => $list])->with('courses', $list);
	}
	
	public function deleteCourse($id){
		$course = Course::findOrFail($id);
		$course->delete();
	}
	
	public function showCourses(){
		$list = Course::paginate(6);
		
		return view('/courses/courses', ['courses' => $list])->with('courses', $list);
		
	}
	public function createCourse(Request $request){
		$course = new Course();
		//n		ame description price id
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

		$user->courses()->attach($course->id);
	}
	
}
