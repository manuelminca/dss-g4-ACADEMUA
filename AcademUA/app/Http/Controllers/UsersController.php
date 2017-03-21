<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UsersController extends Controller
{
    public function deleteUser ($id){
        $user = new User();
        $user->deleteUser($id);
    }

    public function edit($id){

    } 

    public function createUser(Request $request){
        $user = new User();
        $user->email= $request->input('email');
        $user->name= $request->input('name');
        $user->username= $request->input('username');
        $user->password= $request->input('pass');

        $user->save();

        return view('home');
    }
}
