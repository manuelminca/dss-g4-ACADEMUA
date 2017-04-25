<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use Notifiable;

	//Activate timestamps
	public $timestamps = true;
	
	//T	his variable will store the birthdate of the user.
			private $birthdate = "";
	
	public function courses() {
		return $this->belongsToMany('App\Course', 'course_user', 'user_id', 'course_id');
	}
	
	public function comments() {
		return $this->belongsToMany('App\Comment', 'comments', 'id');
	}
	
	/**
	* The attributes that are mass assignable.
			     *
			     * @var array
			     */
			    protected $fillable = [
			        'name', 'email', 'password', 'username', 'professor',
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
				GETTERS AND SETTERS
	###############################################*/

	public function getName(){
		return $this->name;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getUsername(){
		return $this->username;
	}

	//###################################################

	public function deleteUser(){
		$this->delete();
	}
	
	
	public function edit($name, $email, $password){
		
		$this->name = $name;
		$this->email = $email;
		$this->password = $password;
	
		$this->save();
		
	}

	public function createUser($email,$name,$username,$password, $professor){
				
		$this->email= $email;
		$this->name= $name;
		$this->username= $name;
		$this->password= $password;
		$this->professor = $professor;
		
		$this->save();
		
	}

	public function showInstructors () {
		$list = User::where('professor','=',true);
		return $list;
	}
	
	
}
