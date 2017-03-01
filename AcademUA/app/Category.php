<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	private $name = "";
	public function Courses() {
		return $this->belongsToMany('App\Courses');
	}
}
