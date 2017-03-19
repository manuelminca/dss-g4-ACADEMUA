<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    private $id = 0;
    private $name = "";
    private $description = "";
    private $price = 0.0;
    private $teacher_id = 0;


    public function categories() {
        return $this->belongsToMany('App\Category');
    }

    public function user(){
        return $this->belongsToMany('App\User', 'course_user', 'course_id', 'user_id');
    }


    public function updateCourse($course){

        $id = $course->id;
        $name = $course->name;
        $description = $course->description;
        $price = $course->price;
        $teacher_id = $course->teacher_id;


        $this->update();
    }
}



