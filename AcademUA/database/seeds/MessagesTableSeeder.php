<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     
     */
    public function run()
    {
        
        DB::table('messages')->insert([
            'subject' => 'Question about the session 5',
            'sender_id' => 1,
            'receiver_id' => 2,
            'message' => 'Hello, I would like to know about the session 5, when you say that we have to make the menu responsive what do you mean?'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Answer to your question',
            'sender_id' =>2,
            'receiver_id' => 1,
            'message' => 'We need to have a responsive menu for the mobile users, you can learn more about in the session 6, good luck!'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Thanks you for your video!',
            'sender_id' => 1,
            'receiver_id' => 2,
            'message' => 'I would like to thanks you for your video, it has helped me a lot. Are you planning to upload one about Javascript?'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Thanks for your message',
            'sender_id' => 2,
            'receiver_id' => 1,
            'message' => 'Thanks for your message, and yes, I am planning to upload some more videos about javascript and angularJS, thanks'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Question about your course',
            'sender_id' => 2,
            'receiver_id' => 1,
            'message' => 'I have another doubt in the session 7, I dont understand how do you pass the variable by reference, thanks'
        ]);

        //Sesions 
        DB::table('messages')->insert([
            'subject' => 'Question about the session 5',
            'sender_id' => 3,
            'receiver_id' => 4,
            'message' => 'Hello, I would like to know about the session 5, when you say that we have to make the menu responsive what do you mean?'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Answer to your question',
            'sender_id' =>3,
            'receiver_id' => 4,
            'message' => 'We need to have a responsive menu for the mobile users, you can learn more about in the session 6, good luck!'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Thanks you for your video!',
            'sender_id' => 3,
            'receiver_id' => 4,
            'message' => 'I would like to thanks you for your video, it has helped me a lot. Are you planning to upload one about Javascript?'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Thanks for your message',
            'sender_id' => 3,
            'receiver_id' => 1,
            'message' => 'Thanks for your message, and yes, I am planning to upload some more videos about javascript and angularJS, thanks'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Question about your course',
            'sender_id' => 4,
            'receiver_id' => 1,
            'message' => 'I have another doubt in the session 7, I dont understand how do you pass the variable by reference, thanks'
        ]);

        //user 5 and 6
        DB::table('messages')->insert([
            'subject' => 'Question about the session 5',
            'sender_id' => 5,
            'receiver_id' => 6,
            'message' => 'Hello, I would like to know about the session 5, when you say that we have to make the menu responsive what do you mean?'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Answer to your question',
            'sender_id' =>5,
            'receiver_id' => 6,
            'message' => 'We need to have a responsive menu for the mobile users, you can learn more about in the session 6, good luck!'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Thanks you for your video!',
            'sender_id' => 5,
            'receiver_id' => 6,
            'message' => 'I would like to thanks you for your video, it has helped me a lot. Are you planning to upload one about Javascript?'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Thanks for your message',
            'sender_id' => 5,
            'receiver_id' => 6,
            'message' => 'Thanks for your message, and yes, I am planning to upload some more videos about javascript and angularJS, thanks'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Question about your course',
            'sender_id' => 5,
            'receiver_id' => 6,
            'message' => 'I have another doubt in the session 7, I dont understand how do you pass the variable by reference, thanks'
        ]);

        //user 7 and 8
        DB::table('messages')->insert([
            'subject' => 'Question about the session 5',
            'sender_id' => 7,
            'receiver_id' => 8,
            'message' => 'Hello, I would like to know about the session 5, when you say that we have to make the menu responsive what do you mean?'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Answer to your question',
            'sender_id' =>7,
            'receiver_id' => 8,
            'message' => 'We need to have a responsive menu for the mobile users, you can learn more about in the session 6, good luck!'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Thanks you for your video!',
            'sender_id' => 7,
            'receiver_id' => 8,
            'message' => 'I would like to thanks you for your video, it has helped me a lot. Are you planning to upload one about Javascript?'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Thanks for your message',
            'sender_id' => 7,
            'receiver_id' => 8,
            'message' => 'Thanks for your message, and yes, I am planning to upload some more videos about javascript and angularJS, thanks'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Question about your course',
            'sender_id' => 7,
            'receiver_id' => 8,
            'message' => 'I have another doubt in the session 7, I dont understand how do you pass the variable by reference, thanks'
        ]);
    }
}
