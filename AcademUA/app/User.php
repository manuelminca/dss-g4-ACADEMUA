<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
	use Notifiable;

	//Activate timestamps
	public $timestamps = true;
	
	//This variable will store the birthdate of the user.
	private $birthdate = "";

	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = [
		'id','name', 'email', 'password', 'username', 'professor','admin', 'description',
	];

	/**
	* The attributes that should be hidden for arrays.
	*
	* @var array
	*/
	protected $hidden = [
		'password', 'remember_token',
	];
	
	/*#############################################
					Relationships
	###############################################*/
	
	public function courses() {
		return $this->belongsToMany('App\Course', 'course_user', 'user_id', 'course_id');
	}
	
	public function comments() {
		return $this->belongsToMany('App\Comment', 'comments', 'id');
	}

	public function messages_sended() {
		return $this->hasOne('App\Message', 'messages', 'id');
	}

	public function messages_received() {
		return $this->hasOne('App\Message', 'messages', 'id');
	}

	/*#############################################
				GETTERS AND SETTERS
	###############################################*/

	public function getId() {
		return $this->id;
	}

	public function getName(){
		return $this->name;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getUsername(){
		return $this->username;
	}

	//get the instructors
	public function showInstructors () {
		$list = User::where('professor','=',true);
		return $list;
	}

	//Get the id of a user given its username
	public static function getIdFromName ($username) {
		$user = User::where('username','=',$username)->first();
		return  $user->id;
	}

	/*#############################################
					Other functions
	###############################################*/

	public function deleteUser(){
		$this->delete();
	}
	
	//Change the name, email, password or description of a user
	public function edit($name, $email, $password, $description){
		if($name != null){
			$this->name = $name;
		}
		if($email != null){
			$this->email = $email;
		}
		if($password != null){
			$this->password = $password;
		}
		$this->description = $description;
		$this->save();
	}

	//create a user given the email, name, surname, password and professor
	public function createUser($email,$name,$username,$password, $professor){
				
		$this->email= $email;
		$this->name= $name;
		$this->username= $name;
		$this->password= $password;
		$this->professor = $professor;
		$this->admin = false;
		$this->save();
	}

	//return true if the actual user is a teacher
	public function checkTeacher(){
		if($this->professor == 1 || $this->admin == 1){
			return true;
		}else{
			return false;
		}
	}

	//Return true if the Authed user is the teacher of a given course
	public function checkCurrentTeacher($course){
		if($course->teacher_id == Auth::user()->id){
			return true;
		}else{
			return false;
		}
	}

	//Return true if the user is admin
	public function checkAdmin(){
		if($this->admin == 1){
			return true;
		}else{
			return false;
		}
	}

	//Return true if the user is attend to a given course
	public function checkAttendingCourse($course_id){
		$courses = User::find(Auth::user()->id)->courses()->get();
		foreach ($courses as $course){
			if($course->id == $course_id || $this->admin == 1){
				return true;
			}
		}
		return false;
	}	
}
