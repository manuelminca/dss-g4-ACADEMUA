<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Course extends Model
{
	//A	ctivate timestamps
		public $timestamps = true;
	
	
	/**
	* The attributes that are mass assignable.
				     *
				     * @var array
				     */
				    protected $fillable = [
				        'id', 'name', 'description', 'content', 'price', 'teacher_id', 
				    ];

		/*#############################################
					Relationships
		###############################################*/
	
	
	//Relation between courses and categories
	public function categories() {
		return $this->belongsToMany('App\Category');
	}
	
	//Relation between users and courses
	public function users(){
		return $this->belongsToMany('App\User', 'course_user', 'course_id', 'user_id');
	}
	
	//Relation between comments and courses
	public function comments() {
		return $this->belongsToMany('App\Comment', 'comments', 'id');
	}
	
	//Relation between sessions and courses
	public function sessions() {
		return $this->belongsToMany('App\Session', 'sessions', 'id');
	}
	
	
		/*#############################################
					GETTERS AND SETTERS
		###############################################*/
	
	//Get the courses from id teacher
	public function getCourses($idTeacher){
		$courses = Course::where('teacher_id', $idTeacher)->get();
		
		return $courses;
	}

	//Get the courses of the Authed user
	public function getUserCourses(){
		$CoursesUser = Auth::user()->courses()->get();
		
		return $CoursesUser;
	}
	
	//Get the comments of a course given its id
	public function getComments($course_id){
		$comments = Comment::where('course_id', $course_id)->get();
		return $comments;
	}
	
	//Get the categories of a course given its id
	public function getCategories($course_id){
		$categories = Course::find($course_id)->category->name;
		return $categories;
	}

	//get all the courses
	public function showCourses(){
		$list = Course::all();
		return $list;
	}


		/*#############################################
					Other functions
		###############################################*/
	
	
	
	public function deleteCourse(){
		$this->delete();
	}
	
	//Get courses filtering
		public function showCoursesFilter($filter, $valor, $order, $how){
		
		if ($filter == 'precio_menor') {
			
			if ($order == 'precio' && $how == 'asc' ) {
				
				$list = Course::where('price','<',$valor)->orderBy('price')->paginate(6);
			} else if ($order == 'precio' && $how == 'desc' )  {
				$list = Course::where('price','<',$valor)->orderBy('price', "desc")->paginate(6);
			} else if ($order == 'nombre' && $how == 'desc' )  {
				$list = Course::where('price','<',$valor)->orderBy('name')->paginate(6);
			} else {
				$list = Course::where('price','<',$valor)->orderBy('name', 'desc')->paginate(6);
			}
			
		}
		elseif ($filter == 'nombre') {
			if ($order == 'precio' && $how == 'asc' ) {
				$list = Course::where('name','like','%'.$valor.'%')->orderBy('price')->paginate(6);
			} else if ($order == 'precio' && $how == 'desc' )  {
				$list = Course::where('name','like','%'.$valor.'%')->orderBy('price', 'desc')->paginate(6);
			} else if ($order == 'nombre' && $how == 'desc' )  {
				$list = Course::where('name','like','%'.$valor.'%')->orderBy('name')->paginate(6);
			} else {
				$list = Course::where('name','like','%'.$valor.'%')->orderBy('name', 'desc')->paginate(6);
			}
		}
		return $list;
		
		
	}
	
	
	//Edit a course changing the name, description, price or content of it
	public function editCourse($name, $description, $price, $content){
		
		if($name != null){
			$this->name = $name;
		}
		if($description != null){
			$this->description = $description;
		}
		if($price != null){
			$this->price = $price;
		}
		if($content != null){
			$this->content = $content;
		}	
		$this->save();
		
	}
	
	//create a course given its name, description, price, content, teacher_id
	public function createCourse($name, $description, $price, $content, $teacher_id){
		
		
		$this->name = $name;
		$this->description = $description;
		$this->price = $price;
		$this->teacher_id = $teacher_id;
		
		if($content != null){
			$this->content = $content;
		}
		else{
			$this->content = "";
		}
		
		$this->save();
		
	}
	
	
	//It attaches a course with a user
	public function attendCourse($course, $user){
		$user->courses()->attach($course);
	}
	
	//It detaches a course with a user
	public function unAttendCourse($course, $user){
		$user->courses()->detach($course);
	}
	
	//It attaches a course with a category
	public function attachCategory($category_id){
		$this->categories()->attach($category_id);
	}
	
	//returns if the Authed user is attending to a course
	public function checkAttend(){
		$CoursesUser = Auth::user()->courses()->get();
		foreach ($CoursesUser as $course){
			if($course->id == $this->id){
				return true;
			}
		}
		return false;
	}
	
	//returns if the Authed user is the teacher of the actual course
	public function checkTeacher(){
		if($this->teacher_id == Auth::user()->id){
			return true;
		}
		else{
			return false;
		}
	}


	//It return the average rating of comments
	public function getAverage(){
		$list_comments = Comment::where('course_id', $this->id)->get();
		$total = 0;
		$iterations = 0;
		foreach ($list_comments as $comment) {
			$total = $total + $comment->rating;
			$iterations = $iterations + 1;
		}
		if($iterations != 0){
			$average = ($total / $iterations);
		}else{
			$average = "N/A";
		}
		return $average;
	}

	//Get the number of students attending a course
	public function getNumStudents(){
		$list_users = $this->users()->get();
		$iterations = 0;
		foreach ($list_users as $comment) {
			$iterations = $iterations + 1;
		}
		return $iterations;
	}

	
}




