<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class UsersController extends BaseController
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
		$username = Auth::user()->username;
		return $username;
	}
	public function getEmail(){
		$email = Auth::user()->email;
		return $email;
	}
	
	
	
	//###########################################################
	
	
	
	public function deleteUser (){
		$user = User::find(Auth::user()->id);
		$user->deleteUser();
		return view('home');
	}
	
	public function ModifyUser (){
		$user = User::find(Auth::user()->id);
		return view('/users/modifyUser')->with('user', $user);
	}
	
	public function edit(Request $request){
		
		$this->validate($request,[
			'email' => 'required | email | unique:users,email',
			'name' => 'required',
			'password' => 'required | min:2',
			'password_confirmation' => 'required | same:password'
		]);
		
		
		$user = User::findOrFail(Auth::user()->id);
		
		$name = $request->input('name');
		$email = $request->input('email');
		$password = $request->input('password');
		
		$user->edit($name, $email, $password);
		return view('home');
	}
	
	public function createUser(Request $request){
		
		$this->validate($request,[
			'email' => 'required | email |  unique:users,email',
			'name' => 'required',
			'username' => 'required | unique:users,username',
			'password' => 'required | min:2',
			'password_confirmation' => 'required | same:password'
		]);
		
		$email= $request->input('email');
		$name= $request->input('name');
		$username= $request->input('username');
		$password= $request->input('password');
		$professor= $request->input('professor');
		
		if($professor == "y"){
			$professor = true;
		}
		else{
			$professor = false;
		}
		
		$user = new User();
		$user->createUser($email,$name,$username,$password, $professor);

		$iduser = $user->id;
		$destination = "images/users/";
		$request->file('image')->move($destination, $iduser);
		
		return view('home');
	}
	
	
	public function showInstructors(){
		$user = new User();
		
		$list = $user->showInstructors()->paginate(6);
		
		return view('/users/instructors', ['users' => $list])->with('users', $list);
	}
	
	
	
}
