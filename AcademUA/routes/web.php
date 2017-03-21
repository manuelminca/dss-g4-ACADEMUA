<?php
use App\User;
use App\Course;





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


Route::get('/users/delete/{id}', 'UserController@showProfile') {
	//T	o delete a specific user from the DB
	/*
	$user = User::find($id);
	$user->delete();
	$users = App\User::all();
	*/

	
	$_users = new UsersController ();
	$users = $_users -> deleteProfile();
	
	return view('home')->with('users', $users);
}
);

Route::get('/courses', function () {
	// 	show all the courses
				    $courses = Course::all();
	return view('/courses/courses')->with('courses', $courses);
}
);

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

Route::get('/courses/modified/{id}', function ($id) {
	//m	odify the data of a course

	$course = Course::find($id);
	$courseAux = new Course();
    $name = (String) $_REQUEST['name'];
    $description = (String) $_REQUEST['description'];
    
    $courseAux->id = $id;

	if( $name == ""){
		$courseAux->name = "VACIO";
	}
	else{
		$courseAux->name = $name;
	}
	
	if( $description == ""){
		$courseAux->description = "VACIO";
	}
	else{
		$courseAux->description = $description;
	}
    
	$courseAux->price = $course->price;
	$courseAux->teacher_id = $course->teacher_id;
	
	
	$course->updateCourse($courseAux);
	

	$course = Course::find($id);
	return view('/courses/modifyCourse')->with('courses', $course);
}
);

Route::get('/modifiedCourse', function () {
	//m	odify the data of a course

	return view('/courses/modifiedCourse');
}
);


