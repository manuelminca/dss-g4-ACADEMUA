<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course;
use App\User;
use App\Category;
use App\Comment;
use App\Message;
class MessagesController extends Controller
{
    public function deleteMessage($id){ //We have to redirect to Manage Courses but we need the session of the teacher(in progress)
		$message = Message::findOrFail($id);
		$message->deleteMessage();

		$list = Message::paginate(6);
		return view('messages.messages', ['messages' => $list]); //We have to change that in the future
	}

    public function createMessage(Request $request){
		$message = new Message();
		$this->validate($request,[
				'sender_id' => 'required',
				'receiver_id' => 'required',
				'subject' => 'required',
				'message' => 'required'
		]);
		
		$sender_id= $request->input('sender_id');
		$receiver_id= $request->input('receiver_id');
		$subject= $request->input('subject');
		$messageReceived= $request->input('message');

		
		$message->createMessage($subject,$sender_id,$receiver_id,$messageReceived);
		
		

		return view('home');
	}

    public function newMessage(){
		return view('messages.createMessage');
	}

    public function showMessages(){
		$list = Message::paginate(6);
		
		return view('messages.messages', ['messages' => $list]);
	}

}
