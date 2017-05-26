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
            'subject' => 'Programación',
            'sender_id' => 1,
            'receiver_id' => 2,
            'message' => 'Hey! Could you help me with an exercise?'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Programación',
            'sender_id' =>2,
            'receiver_id' => 1,
            'message' => 'Of course!'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Programación',
            'sender_id' => 1,
            'receiver_id' => 2,
            'message' => 'Hey! Could you help me with an exercise?'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Programación',
            'sender_id' =>3,
            'receiver_id' => 4,
            'message' => 'Are you interested in my course about programming?'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Programación',
            'sender_id' => 4,
            'receiver_id' => 3,
            'message' => 'Yes, I am going to attend'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Programación',
            'sender_id' =>5,
            'receiver_id' => 6,
            'message' => 'Thanks for your course it has helped me a lot!'
        ]);
        
        DB::table('messages')->insert([
            'subject' => 'Programación',
            'sender_id' =>6,
            'receiver_id' => 5,
            'message' => 'You are welcome, nice to help you.'
        ]);
    }
}
