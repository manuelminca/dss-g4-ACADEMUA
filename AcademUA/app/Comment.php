<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	public function courses() {
		return $this->belongsTo('App\Course');
	}

    public function users() {
        return $this->belongsTo('App\User');
    }

	protected $fillable = [
			        'id', 'description', 'rating', 'course_id', 'user_id',
			    ];
	
	
	public function deleteComment ($id) {
		$comment = Comment::find($id);
		$comment->delete();
	}

	public function createComment ($description, $rating, $id_course, $id_user) {
		$this->description = $description;
		$this->rating = $rating;
		$this->course_id = $id_course;
		$this->user_id = $id_user;
		$this->save();
	}

	/*public function attachCourse($course_id){
		$this->courses()->attach($course_id);
	}

	public function attachUser($user_id){
		$this->user()->attach($user_id);
	}*/

}