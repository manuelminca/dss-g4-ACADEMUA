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
        $course = Course::all();
        return view('/courses/courses')->with('courses', $courses);
    }
    public function deleteCourse($id){
        
    }
}
