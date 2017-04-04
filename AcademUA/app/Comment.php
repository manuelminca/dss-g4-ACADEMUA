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
	
	public function deleteComment ($id) {
		$comment = Comment::find($id);
		$comment->delete();
	}
}