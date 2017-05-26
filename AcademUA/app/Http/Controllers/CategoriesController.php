<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends BaseController
{
	public function deleteCategory ($id) { //to get here the admin has to type the link to delete a category
		$category = new Category();
		$category->deleteCategory($id);
		
		return view('/courses/courses')->with('courses', $course);
	}
	
	
	public function createCategory(Request $request){ //same here
		$category = new Category();
		$this->validate($request,[
				'name' => 'required | unique:categories,name',
		]);
		
		$name= $request->input('name');
		$category->createCategory($name);
		
		return view('home');
	}
	public function getAllcategories(){ //this function is used to show all the categories to create a course
		$cat = new Category();
		return $cat->getAllCategories();
	}

	public function newCategory(){ //returns the view to create a new cat.
		return view('categories.createCategory');
	}
	
}
