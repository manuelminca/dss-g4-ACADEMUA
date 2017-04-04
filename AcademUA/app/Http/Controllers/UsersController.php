<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UsersController extends Controller
{


	/*#############################################
				GETTERS AND SETTERS
	###############################################*/

	public function getName($id){
		$user = new User();
		$name = $user->getName();
		return $name;
	}

public function getUsername($id){
		$user = new User();
		$username = $user->getUsername();
		return $username;
	}
	public function getEmail($id){
		$user = new User();
		$email = $user->getEmail();
		return $email;
	}



//###########################################################










	public function deleteUser ($id){
		$user = User::find($id);
		$user->deleteUser();
		return view('home');
	}
	
	public function edit(Request $request, $id){
		
		$this->validate($request,[
						            'email' => 'required | unique:users,email',
						            'name' => 'required',
						            'password' => 'required | min:2',
						            'password_confirmation' => 'required | same:password'
						        ]);
		
		
		$user = User::findOrFail($id);

		$name = $request->input('name');
		$email = $request->input('email');
		$password = $request->input('password');

		$user->edit($name, $email, $password);
    	return view('home');
	}
	
	public function createUser(Request $request){
		
		$this->validate($request,[
				            'email' => 'required | unique:users,email',
				            'name' => 'required',
				            'username' => 'required | unique:users,username',
				            'password' => 'required | min:2',
				            'password_confirmation' => 'required | same:password'
				        ]);
		
		$email= $request->input('email');
		$name= $request->input('name');
		$username= $request->input('username');
		$password= $request->input('password');
		
		$user = new User();
		$user->createUser($email,$name,$username,$password);
		
		return view('home');
	}
	
	
	public function showInstructors(){
		$user = new User();

		$list = $user->showInstructors()->paginate(6);
		
		return view('/users/instructors', ['users' => $list])->with('users', $list);
	}
	
	
	
}
