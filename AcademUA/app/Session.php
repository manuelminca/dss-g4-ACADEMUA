<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{

	//Activate timestamps
	public $timestamps = true;
	
	
	public function course() {
		return $this->belongsTo('App\Course');
	}
	

	
	/**
	* The attributes that are mass assignable.
			     *
			     * @var array
			     */
			    protected $fillable = [
			        'title', 'content', 'video','course_id'
			    ];


    public function getSessions($course_id){
		$sessions = Session::where('course_id', $course_id)->paginate(1);

		return $sessions;
	}


	public function deleteSession(){
		$this->delete();
	}

	public function createSession ($title, $content, $video, $course_id) {
		$this->title = $title;
		if($content == null){
			$this->content = "";
		}else{
			$this->content = $content;
		}

		if($video == null){
			$this->video = "";
		}else{
			$this->video = $video;
		}

		$this->course_id = $course_id;
		$this->save();
	}
}
