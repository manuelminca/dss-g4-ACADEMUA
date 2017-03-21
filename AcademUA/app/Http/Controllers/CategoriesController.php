<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function deleteCategory ($id) {
        $category = new Category();
        $category->deleteCategory($id);
    }
}
