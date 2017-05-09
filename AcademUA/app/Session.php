<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use Notifiable;

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
		$sessions = Session::where('course_id', $course_id)->get();

		return $sessions;
	}


	public function deleteSession(){
		$this->delete();
	}

	public function createSession ($title, $content, $video, $course_id) {
		$this->title = $title;
		$this->content = $content;
		$this->video = $video;
		$this->course_id = $course_id;
		$this->save();
	}
	
	


}
