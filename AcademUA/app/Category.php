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


	/*#############################################
					Relationships
	###############################################*/

	
	//Relation between courses and categories
	public function courses() {
		return $this->belongsToMany('App\Course');
	}


	/*#############################################
				GETTERS AND SETTERS
	###############################################*/


	public function getAllCategories(){
		$list = Category::all();
		return $list;
	}

	//Get the ID of a category given its name
	public function getID($name){
		$categoryID = Category::where('name', $name)->get();
		return $categoryID;
	}


	/*#############################################
				Other functions
	###############################################*/
	

	//Delete a category given its $id
	public function deleteCategory ($id) {
		$category = Category::find($id);
		$category->delete();
	}

	//Creates a category given its name
	public function createCategory($name){
        $this->name=$name;
        $this->save();
    }


}
