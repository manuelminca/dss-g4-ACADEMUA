<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use Notifiable;
	
	//T	his variable will store the birthdate of the user.
			private $birthdate = "";
	
	public function courses() {
		return $this->belongsToMany('App\Course', 'course_user', 'user_id', 'course_id');
	}
	
	
	
	/**
	* The attributes that are mass assignable.
			     *
			     * @var array
			     */
			    protected $fillable = [
			        'name', 'email', 'password',
			    ];
	
	
	
	
	/**
	* The attributes that should be hidden for arrays.
			     *
			     * @var array
			     */
			    protected $hidden = [
			        'password', 'remember_token',
			    ];
	
	
	public function deleteUser(){
		$this->delete();
	}
	
	
	public function edit($name, $email, $password){
		
		$this->name = $name;
		$this->email = $email;
		$this->password = $password;
	
		$this->save();
		
	}

	public function createUser($email,$name,$username,$password){
				
		$this->email= $email;
		$this->name= $name;
		$this->username= $name;
		$this->password= $password;
		
		$this->save();
		
	}
	
	
}
