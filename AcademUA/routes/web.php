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
Route::get('/user/modify/{id}', function ($id) {
	//m	odify the data of a course
	$user = User::find($id);
	return view('/users/modifyUser')->with('user', $user);
}
);
Route::get('/users/delete/{id}', 'UsersController@deleteUser');
Route::get('/users/modified/{id}', 'UsersController@edit');
Route::get('/users/create/', 'UsersController@createUser');
Route::get('/user/new/', function () {

	return view('/users/createUser');
}
);


/*##################################################################################################
####################################COURSES###########################################################
##################################################################################################*/

Route::get('/courses/create/','CoursesController@createCourse');
Route::get('/courses/attend/{course_id}&{user_id}','CoursesController@attendCourse');
	

Route::get('/manageCourses', function () {
	//l	ist of all the courses 
				    $courses = Course::where('teacher_id', '2')->get();
	return view('/courses/manageCourses')->with('courses', $courses);
}
);

Route::get('/courses/delete/{id}', function ($id) {
	//deleting only one course 
	$course = Course::find($id);
	$course->delete();
	
	$course = App\Course::all();
	return view('/courses/manageCourses')->with('courses', $course);
}
);

Route::get('/courses/modify/{id}', function ($id) {
	//m	odify the data of a course
	$course = Course::find($id);
	return view('/courses/modifyCourse')->with('courses', $course);
}
);

Route::get('/courses/course/{id}', function ($id) {
	//m	odify the data of a course
	$course = Course::find($id);
	return view('/courses/course')->with('course', $course);
}
);

Route::get('/courses', 'CoursesController@showCourses');
//Muestra cursos filtrando
Route::get('/courses/filter', 'CoursesController@showCoursesFilter');

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


Route::get('/categories/create/', 'CategoriesController@createCategory');
Route::get('/category/new/', function () {

	return view('/categories/createCategory');
}
);
