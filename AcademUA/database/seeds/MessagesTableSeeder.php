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
            'sender_id' => 41,
            'receiver_id' => 42,
            'message' => 'hola'
        ]);

        DB::table('messages')->insert([
            'subject' => 'Programación',
            'sender_id' => 42,
            'receiver_id' => 41,
            'message' => 'adios'
        ]);
    }
}
