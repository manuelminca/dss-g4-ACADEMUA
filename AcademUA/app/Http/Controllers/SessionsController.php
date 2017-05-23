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
	
	public function sessions($course_id){

		$list = Session::where('course_id',$course_id)->paginate(4);	
		return view('sessions.sessions', ['sessions' => $list])->with('course',$course_id);

	}


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

		public function deleteSession ($session_id, $course_id) {

		$session = Session::find($session_id);
		if(Auth::user()->id == $session->course->teacher_id || Auth::user()->checkAdmin()){
			$session->deleteSession();
		}

		$list = Session::where('course_id',$course_id)->paginate(8);	
		return view('sessions.sessions', ['sessions' => $list])->with('course',$course_id);
		
	}

	
}
