<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    private $id = 0;
    private $name = "";
    private $description = "";
    private $content = "";
    private $links = "";
    private $price = 0.0;
    private $teacher_id = 0;


    public function categories() {
        return $this->belongsToMany('App\Category');
    }

    public function user(){
        return $this->belongsToMany('App\User', 'course_user', 'course_id', 'user_id');
    }


    public function updateCourse($course){
        /*
        $courseAUX = Course::find($course->id);


        $courseAUX->name = $course->name;
        $courseAUX->description = $course->description;
        $courseAUX->price = $course->price;
        $courseAUX->teacher_id = $course->teacher_id;

*/
        $course->update();
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
		
		$course = new Course();
		$course->name = $name2;
		$course->description = $description2;
		$course->price = $price2;
		$course->content = $content2;
		$course->links = $links2;
		$course->teacher_id = $teacher_id2;
		$course->save();
	}




	public function attendCourse($course, $user){
		$user->courses()->attach($course);
	}
    
}



