<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course;
use App\User;
use App\Category;
use App\Comment;
use App\Message;

use Illuminate\Support\Facades\Auth;

class MessagesController extends BaseController
{
    public function deleteMessage($id){ 
		$message = Message::findOrFail($id);

		if(Auth::user()->id == $message->sender_id || Auth::user()->id == $message->receiver_id ){
			$message->deleteMessage();
		}
		
		$listInbox = Message::getReceivedMessages(Auth::user()->id);
		$listOutbox = Message::getSentMessages(Auth::user()->id);

		return view('messages.messages', ['messagesInbox' => $listInbox], ['messagesOutbox' => $listOutbox]);
	}

    public function createMessage(Request $request){
		$message = new Message();
		$this->validate($request,[

				'subject' => 'required',
				'message' => 'required',
				'receiver' => 'required | exists:users,username'
		]);
		
		$sender_id = Auth::user()->id;
		$receiver_id = User::getIdFromName($request->input('receiver'));
		$subject= $request->input('subject');
		$messageReceived= $request->input('message');

		
		$message->createMessage($subject,$sender_id,$receiver_id,$messageReceived);
		
		
		$listInbox = Message::getReceivedMessages(Auth::user()->id);
		$listOutbox = Message::getSentMessages(Auth::user()->id);

		return view('messages.messages', ['messagesInbox' => $listInbox], ['messagesOutbox' => $listOutbox]);
	}

    public function newMessage(){
		return view('messages.createMessage');
	}

    public function showReceivedMessages(){
		$list = Message::getReceivedMessages(Auth::user()->id);
		
		
		return view('messages.receivedMessages', ['messages' => $list]);
	}

	public function showSentMessages(){
		$list = Message::getSentMessages(Auth::user()->id);
		
		return view('messages.sentMessages', ['messages' => $list]);
	}

	public function showMessages(){
		$listInbox = Message::getReceivedMessages(Auth::user()->id);
		$listOutbox = Message::getSentMessages(Auth::user()->id);

		return view('messages.messages', ['messagesInbox' => $listInbox], ['messagesOutbox' => $listOutbox]);
	}

}
