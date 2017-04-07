<?php

namespace App;

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
        return $this->belongsTo('App\User');
    }

	public function user_sender() {
		return $this->belongsTo('App\User');
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
}
