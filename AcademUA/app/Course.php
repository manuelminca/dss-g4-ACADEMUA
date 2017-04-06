<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

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
	
	

    public function allCourses(){
        $courses = Course::all();
        return $courses;
    }

    public function edit($name, $description) {
		
		$this->name = $name;
		$this->description= $description;
		$this->save();
		}
	
	public function deleteCourse(){
		$this->delete();
	}
	
	public function showCourses(){
		$list = Course::all();
		return $list;
	}

	//Muestra cursos filtrando
	public function showCoursesFilter($filter, $valor){
		
		if ($filter == 'precio_menor') {
			$list = Course::where('price','<',$valor);	
		} elseif ($filter == 'nombre') {
			$list = Course::where('name','like','%'.$valor.'%');
		}
		return $list;
		
		
	}

	

	public function createCourse($name2, $description2, $price2, $content2, $links2,  $teacher_id2){
		
		//$course = new Course();
		$this->name = $name2;
		$this->description = $description2;
		$this->price = $price2;
		$this->content = $content2;
		$this->links = $links2;
		$this->teacher_id = $teacher_id2;
		$this->save();

	}




	public function attendCourse($user_id){
		$this->courses()->attach($user_id);
	}

	public function attachCategory($category_id){
		$this->categories()->attach($category_id);
	}
    
}



