<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	/**
	* The attributes that are mass assignable.
			     *
			     * @var array
			     */
			    protected $fillable = [
			        'name',
			    ];
	

	public function courses() {
		return $this->belongsToMany('App\Course');
	}
	
	public function deleteCategory ($id) {
		$category = Category::find($id);
		$category->delete();
	}

	public function createCategory($name){
        $this->name=$name;
        $this->save();
    }

	public function getAllCategories(){
		$list = Category::all();
		return $list;
	}

	public function getID($name){
		$categoryID = Category::where('name', $name)->get();
		return $categoryID;
	}
}
