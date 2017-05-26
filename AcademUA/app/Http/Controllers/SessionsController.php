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
		//returns the view with a list of all the sessions from a given course
	public function sessions($course_id){
		
		$list = Session::where('course_id',$course_id)->paginate(4);
		return view('sessions.sessions', ['sessions' => $list])->with('course',$course_id);
		
	}

		//create a session into the DB
	public function createSession (Request $request, $course_id) {
		$session = new Session();
		$this->validate($request,[
						'title' => 'required',
		]);
		
		$title= $request->input('title');
		$content= $request->input('content');
		$video = $request->input('video');
		
		$session->createSession($title, $content, $video, $course_id);
		
		return redirect()->action(
					'SessionsController@sessions', ['id' => $course_id]);
	}
	
	//delete a session given its id
	public function deleteSession ($session_id) {
		
		$session = Session::find($session_id);
		$course = Course::find($session->course_id);
		if(Auth::user()->checkCurrentTeacher($course) || Auth::user()->checkAdmin()){
			$session->deleteSession();
		}
		
		$list = Session::where('course_id',$session->course_id)->paginate(8);
		return view('sessions.sessions', ['sessions' => $list])->with('course',$session->course_id);
		
	}
	
	
}
