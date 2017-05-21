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

Route::get('/', 'HomeController@index'); 


/*##################################################################################################
####################################USERS###########################################################
##################################################################################################*/

Route::get('/users/modify/', 'UsersController@ModifyUser')->middleware('auth'); //everything OK
Route::get('/users/delete/', 'UsersController@deleteUser')->middleware('auth'); //Everything OK
Route::post('/users/modified/', 'UsersController@edit')->middleware('auth');
//Route::get('/users/create/', 'UsersController@createUser');
Route::get('/users/instructors/', 'UsersController@showInstructors');



/*##################################################################################################
####################################COURSES###########################################################
##################################################################################################*/

Route::post('/courses/create/','CoursesController@createCourse'); 
Route::get('/courses/attend/{course_id}','CoursesController@attendCourse')->middleware('auth'); // the link should not be accesible throught the browser 
Route::get('/courses/manage/{id}','CoursesController@showTeacherCourses'); //the id is the user id
Route::get('/courses/delete/{id}','CoursesController@deleteCourse')->middleware('auth')->middleware('teacher');//Everything OK
Route::get('/courses/course/{id}','CoursesController@showSingleCourse')->middleware('auth'); //Everything OK
Route::get('/courses/new/','CoursesController@newCourse')->middleware('auth')->middleware('teacher'); //Everything OK
Route::get('/courses/create/','CoursesController@createCourse');
Route::get('/courses/modify/{id}','CoursesController@modifyCourse')->middleware('auth')->middleware('teacher');  //Everything OK
Route::get('/courses/quit/{course_id}','CoursesController@unAttendCourse')->middleware('auth'); // the link should not be accesible throught the browser 


Route::get('/courses', 'CoursesController@showCourses');
//Muestra cursos filtrando
Route::get('/courses/filter', 'CoursesController@showCoursesFilter');

Route::get('/courses/modified/{id}', 'CoursesController@edit');



/*##################################################################################################
####################################CATEGORIES###########################################################
##################################################################################################*/
Route::get('/categories/delete/{id}', 'CategoriesController@deleteCategory')->middleware('auth')->middleware('admin'); ////Everything OK


Route::get('/categories/create/', 'CategoriesController@createCategory')->middleware('auth')->middleware('admin');
Route::get('/categories/new/','CategoriesController@newCategory')->middleware('auth')->middleware('admin'); //Everything OK



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
Route::get('/messages/new/','MessagesController@newMessage')->middleware('auth'); //Everything OK
Route::get('/messages', 'MessagesController@showReceivedMessages')->middleware('auth');
Route::get('/messages/received', 'MessagesController@showReceivedMessages')->middleware('auth');
Route::get('/messages/sent', 'MessagesController@showSentMessages')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index');


/*##################################################################################################
####################################SESSIONS###########################################################
##################################################################################################*/

Route::get('/sessions/create/{id}', 'SessionsController@createSession')->middleware('auth')->middleware('teacher');

Route::get('/sessions/new/{course_id}', 'SessionsController@sessions')->middleware('auth')->middleware('teacher');
Route::get('/messages/delete/{id}', 'MessagesController@DeleteMessage')->middleware('auth');
Route::get('/sessions', 'MessagesController@showMessages')->middleware('auth');