<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    private $id = 0;
    private $name = "";
    private $description = "";
    private $price = 0.0;


    public function categories() {
        return $this->belongsToMany('App\Category');
    }

    public function user(){
        return $this->belongsToMany('App\User', 'course_user', 'course_id', 'user_id');
    }

}
