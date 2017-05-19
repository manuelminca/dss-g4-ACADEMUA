<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;
use View;

class BaseController extends Controller
{
    public $coursesFooter;

    public function __construct()
    {
        $coursesFooter = Course::paginate(4);
        View::share('coursesFooter', $coursesFooter);
    }
}
