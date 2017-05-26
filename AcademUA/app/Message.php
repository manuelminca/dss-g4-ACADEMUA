<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //Activate timestamps
	public $timestamps = true;
	
			/**
	* The attributes that are mass assignable.
			     *
			     * @var array
			     */
			    protected $fillable = [
			        'id', 'subject', 'sender_id', 'receiver_id', 'message',
			    ];

	/*#############################################
					Relationships
	###############################################*/

	//relation between receiver and messages
    public function user_receiver(){
        return $this->belongsTo('App\User', 'receiver_id');
    }

	//relation between sender and messages
	public function user_sender() {
		return $this->belongsTo('App\User', 'sender_id');
	}

	/*#############################################
					GETTERS AND SETTERS
	###############################################*/

	//get all messages
	public function showMessages(){
		$list = Message::all();
		return $list;
	}

	//get messages that a user has received, given its id
	public static function getReceivedMessages ($id) {
		$user = Message::where('receiver_id','=',$id)->get();
		return  $user;
	}

	//get messages that a user has sent, given its id
	public static function getSentMessages ($id) {
		$user = Message::where('sender_id','=',$id)->get();
		return  $user;
	}

	//get the user who sent the actual message
	public function getUserSend () {
		$user = $this->user_sender->getUsername();
		return  $user;
	}

	//get the user who received the actual message
	public function getUserReceive () {
		$name = $this->user_receiver->getUsername();
		return  $name;
	}

	/*#############################################
					Other functions
	###############################################*/

    public function deleteMessage(){
		$this->delete();
	}

	//Create a message given the subject, the sender id, the receiver id and the message
	public function createMessage ($subject, $sender_id, $receiver_id, $message) {
		$this->subject = $subject;
		$this->sender_id = $sender_id;
		$this->receiver_id = $receiver_id;
		$this->message = $message;
		$this->save();
	}

	//Return received messages of the Authed user that has the request field in message or subject
	public static function searchInput ($request, $id) {
		$message = Message::where('receiver_id','=',$id)
						 ->where(function($query) use ($request) {$query->where('subject', 'like', '%'. $request . '%')
						 ->orWhere('message', 'like', '%'. $request . '%');
						 })->get();
		return $message;
	}

	//Return sent messages of the Authed user that has the request field in message or subject
	public static function searchOutput ($request, $id) {
		$message = Message::where('sender_id','=',$id)
						 ->where(function($query) use ($request) {$query->where('subject', 'like', '%'. $request . '%')
						 ->orWhere('message', 'like', '%'. $request . '%');
						 })->get();
		return $message;
	}
}
