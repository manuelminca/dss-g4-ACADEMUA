<?php

use Illuminate\Database\Seeder;

class SessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('sessions')->insert([
            'title' => 'Session 1 course 1',
            'content' => 'Video',
            'video' => 'https://www.youtube.com/watch?v=UWP67FyGwUI',
            'course_id' => '1'

        ]);
    }
}
