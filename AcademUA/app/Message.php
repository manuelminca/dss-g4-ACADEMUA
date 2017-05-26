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

    public function user_receiver(){
        return $this->belongsTo('App\User', 'receiver_id');
    }

	public function user_sender() {
		return $this->belongsTo('App\User', 'sender_id');
	}

    public function deleteMessage(){
		$this->delete();
	}
	public function showMessages(){
		$list = Message::all();
		return $list;
	}

	public function createMessage ($subject, $sender_id, $receiver_id, $message) {
		$this->subject = $subject;
		$this->sender_id = $sender_id;
		$this->receiver_id = $receiver_id;
		$this->message = $message;
		$this->save();
	}

	public static function getReceivedMessages ($id) {
		$user = Message::where('receiver_id','=',$id)->get();
		return  $user;
	}

	public static function getSentMessages ($id) {
		$user = Message::where('sender_id','=',$id)->get();
		return  $user;
	}

	public static function getSender () {
		$user = Message::where('sender_id','=',$id)->get();
		return  $user;
	}

	public function getUserSend () {
		$user = $this->user_sender->getUsername();
		return  $user;
	}

	public function getUserReceive () {
		$name = $this->user_receiver->getUsername();
		return  $name;
	}

	public static function searchInput ($request, $id) {
		$user = Message::where('receiver_id','=',$id)
						 ->where(function($query) use ($request) {$query->where('subject', 'like', '%'. $request . '%')
						 ->orWhere('message', 'like', '%'. $request . '%');
						 })->get();
		return $user;
	}

	public static function searchOutput ($request, $id) {
		$user = Message::where('sender_id','=',$id)
						 ->where(function($query) use ($request) {$query->where('subject', 'like', '%'. $request . '%')
						 ->orWhere('message', 'like', '%'. $request . '%');
						 })->get();
		return $user;
	}
}
