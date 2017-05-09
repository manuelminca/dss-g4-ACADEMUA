<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;
use App\Category;
use App\Comment;
use App\Session;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
	


	public function createSession (Request $request, $course_id) {
		$session = new Session();
		$this->validate($request,[
				'title' => 'required',
		]);
		
		
		$title= $request->input('title');
		$content= $request->input('content');
        $video = $request->input('video');

		$session->createSession($title, $content, $video, $course_id);
		//AQUI HAY QUE REDIRECCIONAR A MANAGE COURSE 
        $course = Course::find($course_id);
		$comments = $course->getComments($course_id);
		$sessions = $session->getSessions($course_id);
		return view('courses.course', ['comments' => $comments])->with('course', $course)->with('sessions',$sessions);

	}

		public function deleteSession ($session_id, $course_id) {

		$session = Session::find($session_id);
		if(Auth::user()->id == $session->course->teacher_id || Auth::user()->checkAdmin()){
			$session->deleteSession();
		}

		$course = Course::find($course_idid);
		$comments = $course->getComments($course_id);
		$sessions = $session->getSessions($course_id);
		return view('courses.course', ['comments' => $comments])->with('course', $course)->with('sessions',$sessions);
		
	}

	
}
