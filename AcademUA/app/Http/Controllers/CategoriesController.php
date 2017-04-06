<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
	public function deleteCategory ($id) {
		$category = new Category();
		$category->deleteCategory($id);
		
		return view('/courses/courses')->with('courses', $course);
	}
	
	
	public function createCategory(Request $request){
		$category = new Category();
		$this->validate($request,[
				'name' => 'required | unique:categories,name',
		]);
		
		$name= $request->input('name');
		$category->createCategory($name);
		
		return view('home');
	}
	public function getAllcategories(){
		$cat = new Category();
		return $cat->getAllCategories();
	}
	
}
