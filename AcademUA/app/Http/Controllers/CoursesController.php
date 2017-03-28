<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CoursesController extends Controller
{
    public function edit(Request $request, $id) {
        $course = Course::findOrFail($id);
        if($request->has('name')){
            $course->name = $request->input('name');
            $course->description = $request->input('description');
            $course->save();
        }
        $courses = Course::all();
        return view('/courses/courses')->with('courses', $courses);
    }
    public function deleteCourse($id){
        $course = Course::findOrFail($id);
        $course->delete();
    }

    public function showCourses(){
        $courses = new Course();
        $list = $courses->allCourses();

        return view('/courses/courses')->with('courses', $list);

    }
    public function createCourse(Request $request){
        $course = new Course();
        $course->name= $request->input('name');
        $course->description= $request->input('description');
        $course->price= $request->input('price');
        $course->teacher_id= $request->input('id');

        $course->save();

        return view('home');
    }
}
