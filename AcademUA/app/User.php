<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use Notifiable;
	
	//T	his variable will store the birthdate of the user.
	private $birthdate = "";
	
	public function Courses() {
		return $this->belongsToMany('App\Courses');
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
}
