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
}
