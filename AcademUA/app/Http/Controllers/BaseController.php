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
        $list = Course::paginate(4);
        View::share('courses', $list);

        $user = new User();

        $listInstructors = $user->showInstructors()->paginate(4);
        View::share('users', $listInstructors);

        $coursesFooter = Course::paginate(4);
        View::share('coursesFooter', $coursesFooter);
    }
}
