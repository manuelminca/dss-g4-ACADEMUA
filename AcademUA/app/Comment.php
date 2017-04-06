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
}