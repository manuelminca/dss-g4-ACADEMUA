<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;
use App\Category;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
	
	/*public function deleteComment ($id) {
		$comment = Comment::findOrFail($id);
		$comment->deleteComment();

		$list = Comment::paginate(6);
		return view('courses.courses', ['courses' => $list]);
	}*/

	public function createComment (Request $request, $course_id) {
		$comment = new Comment();
		$this->validate($request,[
				'description' => 'required',
				'rating' => 'required | min:0 | max:5 | numeric'
		]);
		
		
		$description= $request->input('description');
		$rating= $request->input('rating');
        $id_user= Auth::user()->id;

		
		$comment->createComment($description, $rating, $course_id, $id_user);
		
		/*$comment->attachCourse($id_course);
        $comment->attachUser($id_user);*/
		
        $coursesCon = new CoursesController();
        return $coursesCon->showSingleCourse($course_id)->with('id_user', $id_user);
		//return view('courses.course.'.$id_course);
	}

		public function deleteComment ($comment_id, $course_id) {

		$comment = Comment::find($comment_id);
		if(Auth::user()->id == $comment->user_id || Auth::user()->checkAdmin()){
			$comment->deleteComment();
		}
		$course = Course::find($course_id);
		$comments = $course->getComments($course_id); //returns an array with all the comments
		return view('courses.course', ['comments' => $comments])->with('course', $course);
		
	}

	
}
