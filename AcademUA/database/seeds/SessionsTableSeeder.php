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

        //Course 2
         DB::table('sessions')->insert([
            'title' => 'Session 1',
            'content' => 'This is the first video of the Course, enjoy!',
            'video' => 'https://www.youtube.com/embed/uxIF8upjjRA',
            'course_id' => '2'
        ]);
         DB::table('sessions')->insert([
            'title' => 'Session 2',
            'content' => 'Video',
            'video' => 'https://www.youtube.com/embed/R5H72_sGB2g',
            'course_id' => '2'
        ]);
         DB::table('sessions')->insert([
            'title' => 'Session 3',
            'content' => 'Video',
            'video' => 'https://www.youtube.com/embed/fEJcIV6vngI',
            'course_id' => '2'
        ]);

         //Course 3
         DB::table('sessions')->insert([
            'title' => 'Session 1',
            'content' => 'This is the first video of the Course, enjoy!',
            'video' => 'https://www.youtube.com/embed/iCUV3iv9xOs',
            'course_id' => '3'
        ]);
         DB::table('sessions')->insert([
            'title' => 'Session 2',
            'content' => 'Video',
            'video' => 'https://www.youtube.com/embed/k6ZiPqsBvEQ',
            'course_id' => '3'
        ]);

         //Course 4
         DB::table('sessions')->insert([
            'title' => 'Session 1',
            'content' => 'This is the first video of the Course, enjoy!',
            'video' => 'https://www.youtube.com/embed/wTqZK7EwD08',
            'course_id' => '4'
        ]);
         DB::table('sessions')->insert([
            'title' => 'Session 2',
            'content' => 'Video',
            'video' => 'https://www.youtube.com/embed/RU-2rFHuXf0',
            'course_id' => '4'
        ]);
         DB::table('sessions')->insert([
            'title' => 'Session 3',
            'content' => 'Video',
            'video' => 'https://www.youtube.com/embed/gX36pbl7GJU',
            'course_id' => '4'
        ]);

        //Course 5
         DB::table('sessions')->insert([
            'title' => 'Session 1',
            'content' => 'This is the first video of the Course, enjoy!',
            'video' => 'https://www.youtube.com/embed/wTqZK7EwD08',
            'course_id' => '5'
        ]);
         DB::table('sessions')->insert([
            'title' => 'Session 2',
            'content' => 'Video',
            'video' => 'https://www.youtube.com/embed/-1yfWb0-jqQ',
            'course_id' => '5'
        ]);

         //Course 6
         DB::table('sessions')->insert([
            'title' => 'Session 1',
            'content' => 'This is the first video of the Course, enjoy!',
            'video' => 'https://www.youtube.com/embed/I8XXfgF9GSc',
            'course_id' => '6'
        ]);
         DB::table('sessions')->insert([
            'title' => 'Session 2',
            'content' => 'Video',
            'video' => 'https://www.youtube.com/embed/M_6z8L8qK8o',
            'course_id' => '6'
        ]);
         DB::table('sessions')->insert([
            'title' => 'Session 3',
            'content' => 'Video',
            'video' => 'https://www.youtube.com/embed/2Ekty7t621k',
            'course_id' => '6'
        ]);
        
        //Course 5
         DB::table('sessions')->insert([
            'title' => 'Session 1',
            'content' => 'This is the first video of the Course, enjoy!',
            'video' => 'https://www.youtube.com/embed/wTqZK7EwD08',
            'course_id' => '5'
        ]);
         DB::table('sessions')->insert([
            'title' => 'Session 2',
            'content' => 'Video',
            'video' => 'https://www.youtube.com/embed/-1yfWb0-jqQ',
            'course_id' => '5'
        ]);

         //Course 6
         DB::table('sessions')->insert([
            'title' => 'Session 1',
            'content' => 'Learn to drive a car!',
            'video' => 'https://www.youtube.com/embed/Zfe4wX5bEys',
            'course_id' => '7'
        ]);

         //Course 8
         DB::table('sessions')->insert([
            'title' => 'Session 1',
            'content' => 'Learn to drive a car!',
            'video' => 'https://www.youtube.com/embed/juKd26qkNAw',
            'course_id' => '8'
        ]);
    }
}
