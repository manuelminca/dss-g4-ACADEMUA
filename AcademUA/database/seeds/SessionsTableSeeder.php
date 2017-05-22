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
            'title' => 'Session 1',
            'content' => 'This is the first video of the Course, enjoy!',
            'video' => 'https://www.youtube.com/embed/r59xYe3Vyks',
            'course_id' => '1'

        ]);
         DB::table('sessions')->insert([
            'title' => 'Session 2',
            'content' => 'Video',
            'video' => 'https://www.youtube.com/embed/gzlhm0jco0g',
            'course_id' => '1'

        ]);
         DB::table('sessions')->insert([
            'title' => 'Session 3',
            'content' => 'Video',
            'video' => 'https://www.youtube.com/embed/U8wrZRYAnmI',
            'course_id' => '1'

        ]);
         DB::table('sessions')->insert([
            'title' => 'Session 4',
            'content' => 'Please, rate the couse!',
            'video' => 'https://www.youtube.com/embed/4ekASokneGU',
            'course_id' => '1'

        ]);
         DB::table('sessions')->insert([
            'title' => 'Session 5',
            'content' => 'video',
            'video' => 'https://www.youtube.com/embed/qgMH6jOOFOE',
            'course_id' => '1'

        ]);
    

    }
}
