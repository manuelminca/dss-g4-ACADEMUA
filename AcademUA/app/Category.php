<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	private $name = "";
	public function courses() {
		return $this->belongsToMany('App\Course');
	}
}
