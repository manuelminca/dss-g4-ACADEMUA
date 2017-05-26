<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

	//Activate timestamps
	public $timestamps = true;

	protected $fillable = [
			        'id', 'description', 'rating', 'course_id', 'user_id',
			    ];

	/*#############################################
					Relationships
	###############################################*/

	//relation between comments and courses
	public function courses() {
		return $this->belongsTo('App\Course');
	}

	//relation between comments and users
    public function users() {
        return $this->belongsTo('App\User');
    }

	/*#############################################
					Other functions
	###############################################*/
	
	public function deleteComment(){
		$this->delete();
	}

	public function createComment ($description, $rating, $id_course, $id_user) {
		$this->description = $description;
		$this->rating = $rating;
		$this->course_id = $id_course;
		$this->user_id = $id_user;
		$this->save();
	}





}