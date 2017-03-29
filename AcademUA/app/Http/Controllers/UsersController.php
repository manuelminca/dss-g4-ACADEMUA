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
        
        $this->validate($request,[
            'email' => 'required | unique:users,email',
            'name' => 'required',
            'username' => 'required | unique:users,username',
            'password' => 'required | min:2',
            'password_confirmation' => 'required | same:password'
        ]);
        

        $user->email= $request->input('email');
        $user->name= $request->input('name');
        $user->username= $request->input('username');
        $user->password= $request->input('password');

        $user->save();

        return view('home');
    }

    




}
