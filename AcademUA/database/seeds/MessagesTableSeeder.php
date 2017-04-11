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
            'message' => 'hola'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Programación',
            'sender_id' =>2,
            'receiver_id' => 1,
            'message' => 'adios'
        ]);
    }
}
