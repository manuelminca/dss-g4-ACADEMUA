<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	private $name = "";
	public function courses() {
		return $this->belongsToMany('App\Course');
	}
	
	public function deleteCategory ($id) {
		$category = Category::find($id);
		$category->delete();
	}
}
