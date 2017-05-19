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
	
	
	
	public function categories() {
		return $this->belongsToMany('App\Category');
	}
	
	public function users(){
		return $this->belongsToMany('App\User', 'course_user', 'course_id', 'user_id');
	}
	
	public function comments() {
		return $this->belongsToMany('App\Comment', 'comments', 'id');
	}
	
	public function sessions() {
		return $this->belongsToMany('App\Session', 'sessions', 'id');
	}
	
	
	
	/*#############################################
	GETTERS AND SETTERS
		###############################################*/
	
	public function getCourses($idTeacher){
		$courses = Course::where('teacher_id', $idTeacher)->get();
		
		return $courses;
	}
	
	
	public function getUserCourses(){
		$CoursesUser = Auth::user()->courses()->get();
		
		return $CoursesUser;
	}
	
	
	
	public function getComments($course_id){
		$comments = Comment::where('course_id', $course_id)->get();
		return $comments;
	}
	
	public function getCategories($course_id){
		$categories = Course::find($course_id)->category->name;
		return $categories;
	}
	
	public function allCourses(){
		$courses = Course::all();
		return $courses;
	}
	
	
	
	public function deleteCourse(){
		$this->delete();
	}
	
	public function showCourses(){
		$list = Course::all();
		return $list;
	}
	
	//M	uestra cursos filtrando
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
	
	
	
	public function attendCourse($course, $user){
		$user->courses()->attach($course);
	}
	
	public function unAttendCourse($course, $user){
		$user->courses()->detach($course);
	}
	
	public function attachCategory($category_id){
		$this->categories()->attach($category_id);
	}
	
	
	public function checkAttend(){
		
		$CoursesUser = Auth::user()->courses()->get();
		foreach ($CoursesUser as $course){
			if($course->id == $this->id){
				return true;
			}
		}
		return false;
	}
	
	public function checkTeacher(){
		if($this->teacher_id == Auth::user()->id){
			return true;
		}
		else{
			return false;
		}
	}
	
}




