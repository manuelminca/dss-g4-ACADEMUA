<?php
use App\User;
use App\Course;
use App\Category;




Route::get('ajaxImageUpload', ['uses'=>'AjaxImageUploadController@ajaxImageUpload']);
Route::post('ajaxImageUpload', ['as'=>'ajaxImageUpload','uses'=>'AjaxImageUploadController@ajaxImageUploadPost']);
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

Route::get('/users/modify/', 'UsersController@ModifyUser')->middleware('auth'); //everything OK
Route::get('/users/delete/', 'UsersController@deleteUser')->middleware('auth'); //Everything OK
Route::get('/users/modified/', 'UsersController@edit')->middleware('auth');
//Route::get('/users/create/', 'UsersController@createUser');
Route::get('/users/instructors/', 'UsersController@showInstructors');



/*##################################################################################################
####################################COURSES###########################################################
##################################################################################################*/

Route::get('/courses/create/','CoursesController@createCourse'); 
Route::get('/courses/attend/{course_id}','CoursesController@attendCourse');
Route::get('/courses/manage/{id}','CoursesController@getCourses');
Route::get('/courses/delete/{id}','CoursesController@deleteCourse')->middleware('auth')->middleware('teacher');
Route::get('/courses/course/{id}','CoursesController@showSingleCourse');
Route::get('/courses/new/','CoursesController@newCourse')->middleware('auth')->middleware('teacher');
Route::get('/courses/modify/{id}','CoursesController@modifyCourse');


Route::get('/courses', 'CoursesController@showCourses');
//Muestra cursos filtrando
Route::get('/courses/filter', 'CoursesController@showCoursesFilter');

Route::get('/courses/modified/{id}', 'CoursesController@edit');



Route::get('/courses/create/','CoursesController@createCourse');

/*##################################################################################################
####################################CATEGORIES###########################################################
##################################################################################################*/
Route::get('/categories/delete/{id}', 'CategoriesController@deleteCategory')->middleware('auth');


Route::get('/categories/create/', 'CategoriesController@createCategory')->middleware('auth');
Route::get('/categories/new/', function () {

	return view('/categories/createCategory');
}
);


/*##################################################################################################
####################################COMMENTS###########################################################
##################################################################################################*/

Route::get('/comments/create/{course_id}', 'CommentsController@createComment')->middleware('auth');
Route::get('/comments/delete/{comment_id}&{course_id}', 'CommentsController@deleteComment')->middleware('auth');

/*##################################################################################################
####################################MESSAGES###########################################################
##################################################################################################*/

Route::get('/messages/create/', 'MessagesController@createMessage')->middleware('auth');
Route::get('/messages/delete/{id}', 'MessagesController@DeleteMessage')->middleware('auth');
Route::get('/messages/new/', function () {

	return view('/messages/createMessage');
}
);
Route::get('/messages', 'MessagesController@showMessages')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index');
