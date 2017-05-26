<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Course;
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
	
	
/*#############################################
				  FUNCTIONS
###############################################*/
	

	public function deleteUser (){
		$user = User::find(Auth::user()->id);
		$user->deleteUser();
		return redirect('/home');
	}
	
	public function ModifyUser (){
		$user = User::find(Auth::user()->id);
		return view('/users/modifyUser')->with('user', $user);
	}
	
	public function edit(Request $request){

		if($request->input('password') != null){
			$this->validate($request,[
			'password' => 'required | min:2',
			'password_confirmation' => 'required | same:password'
		]);
		}
		
			
		$user = User::findOrFail(Auth::user()->id);

		$iduser = $user->id;
		$destination = "images/users/";
		$request->file('image')->move($destination, $iduser);

		$name = $request->input('name');
		$email = $request->input('email');
		$password = $request->input('password');

		if($user->professor == 1){
			$description = $request->input('description');
		}else{
			$description = "Im a student";
		}
		
		$user->edit($name, $email, $password, $description);

		return redirect('/home');
	}
	
	//Creates a user into the DB
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

		if($professor == 1){
			$description = $request->input('description');
		}else{
			$description = "Im a student";
		}
		
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
	
	//returns a view that showes all the instructors with pagination 
	public function showInstructors(){
		$user = new User();
		
		$list = $user->showInstructors()->paginate(8);
		
		return view('/users/instructors', ['users' => $list])->with('users', $list);
	}
	
	
	
}
