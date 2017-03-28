<?php
use App\User;
use App\Course;
use App\Category;





/*
-----------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$users = User::all();
	return view('home')->with('users', $users);
}
);


/*##################################################################################################
####################################USERS###########################################################
##################################################################################################*/
Route::get('/users/delete/{id}', 'UsersController@deleteUser');
Route::get('/users/modified/{id}', 'UsersController@edit');
Route::get('/users/create/', 'UsersController@createUser');
Route::get('/user/new/', function () {

	return view('/users/createUser');
}
);

	return view('/courses/createCourse');
}
);

/*##################################################################################################
####################################COURSES###########################################################
##################################################################################################*/

Route::get('/courses/create/','CoursesController@createCourse');
	


Route::get('/manageCourses', function () {
	//l	ist of all the courses 
				    $courses = Course::where('teacher_id', '2')->get();
	return view('/courses/manageCourses')->with('courses', $courses);
}
);

Route::get('/courses/delete/{id}', function ($id) {
	//d	eleting only one course 
				    $course = Course::find($id);
	
	
	$course->delete();
	
	$course = App\Courses::all();
	return view('/courses/manageCourses')->with('courses', $course);
}
);

Route::get('/courses/modify/{id}', function ($id) {
	//m	odify the data of a course
	$course = Course::find($id);
	return view('/courses/modifyCourse')->with('courses', $course);
}
);

/*
Route::get('/courses', function () {
	// 	show all the courses
	$courses = Course::all();
	return view('/courses/courses')->with('courses', $courses);
}
);
*/
Route::get('/courses', 'CoursesController@showCourses');


Route::get('/courses/modified/{id}', 'CoursesController@edit');


Route::get('/modifiedCourse', function () {
	//m	odify the data of a course

	return view('/courses/modifiedCourse');
}
);
Route::get('/courses/new/', function () {

	return view('/courses/createCourse');
}
);


Route::get('/courses/create/','CoursesController@createCourse');

/*##################################################################################################
####################################CATEGORIES###########################################################
##################################################################################################*/
Route::get('/categories/delete/{id}', 'CategoriesController@deleteCategory');

Route::get('/categories', function () {
	// 	show all the courses
	$categories = Category::all();
	return view('/categories/categories')->with('categories', $categories);
}
);

Route::get('/categories/create/', 'CategoriesController@createCategory');
Route::get('/category/new/', function () {

	return view('/categories/createCategory');
}
);
