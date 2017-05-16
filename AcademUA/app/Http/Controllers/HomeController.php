<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Course::paginate(4);


        $user = new User();
		
		$listInstructors = $user->showInstructors()->paginate(4);

        return view('home', ['courses' => $list], ['users' => $listInstructors]);
    }

         
    public function inicio()
    {
        $list = Course::paginate(8);
		
		return view('courses.courses', ['courses' => $list]);
    }
}
