<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    private $id = 0;
    private $name = "";
    private $description = "";
    private $price = 0.0;


    public function Categories() {
        return $this->belongsToMany('App\Category');
    }

    public function User(){
        return $this->belongsToMany('App\User');
    }

}
