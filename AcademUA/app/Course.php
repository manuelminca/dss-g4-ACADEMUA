<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	//Activate timestamps
	public $timestamps = true;
	
			/**
	* The attributes that are mass assignable.
			     *
			     * @var array
			     */
			    protected $fillable = [
			        'id', 'name', 'description', 'content', 'links', 'price', 'teacher_id', 
			    ];
	
	

    public function categories() {
        return $this->belongsToMany('App\Category');
    }

    public function user(){
        return $this->belongsToMany('App\User', 'course_user', 'course_id', 'user_id');
    }

	public function comments() {
		return $this->belongsToMany('App\Comment', 'comments', 'id');
	}


	/*#############################################
				GETTERS AND SETTERS
	###############################################*/

	public function getCourses($idTeacher){
		$courses = Course::where('teacher_id', $idTeacher)->get();

		return $courses;
	}

	public function getComments($course_id){
		$comments = Comment::where('course_id', $course_id)->get();
		return $comments;
	}

	public function getCategories($course_id){
		$categories = Course::find($course_id)->category->name;
		return $categories;
	}

	public function getLinks(){
		return $this->links;
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

	//Muestra cursos filtrando
	public function showCoursesFilter($filter, $valor, $order, $how){
		
		if ($filter == 'precio_menor') {

			if ($order == 'precio' && $how == 'asc' ) {
				
				$list = Course::where('price','<',$valor)->orderBy('price');
			} else if ($order == 'precio' && $how == 'desc' )  {
				$list = Course::where('price','<',$valor)->orderBy('price', "desc");
			} else if ($order == 'nombre' && $how == 'desc' )  {
				$list = Course::where('price','<',$valor)->orderBy('name');
			} else {
				$list = Course::where('price','<',$valor)->orderBy('name', 'desc');
			}
				
		} elseif ($filter == 'nombre') {
			if ($order == 'precio' && $how == 'asc' ) {
				$list = Course::where('name','like','%'.$valor.'%')->orderBy('price');
			} else if ($order == 'precio' && $how == 'desc' )  {
				$list = Course::where('name','like','%'.$valor.'%')->orderBy('price', 'desc');
			} else if ($order == 'nombre' && $how == 'desc' )  {
				$list = Course::where('name','like','%'.$valor.'%')->orderBy('name');
			} else {
				$list = Course::where('name','like','%'.$valor.'%')->orderBy('name', 'desc');
			}
		}
		return $list;
		
		
	}

	

	public function createCourse($name, $description, $price, $content, $links,  $teacher_id){
		
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
		if($links != null){
			$this->links = $links;
		}
		if($teacher_id != null){
			$this->teacher_id = $teacher_id;
		}

		$this->save();

	}
	public function appendLink($link){
		if($this->links == null){
			$this->links = $link . ";";
		}else{
			$this->links = $this->links . ";" . $link;
		}
		$this->save();
	}



	public function attendCourse($course, $user){
		$user->courses()->attach($course);
	}

	public function attachCategory($category_id){
		$this->categories()->attach($category_id);
	}
    
}




