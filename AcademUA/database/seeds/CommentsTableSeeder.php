<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('comments')->insert([
            'description' => 'Curso de iniciación a Java',
            'rating' => 1,
            'user_id' => 1,
            'course_id' => 4
        ]);

        DB::table('comments')->insert([
            'description' => 'Best course!! Really interesting.',
            'rating' => 4,
            'user_id' => 2,
            'course_id' => 1
        ]);
        DB::table('comments')->insert([
            'description' => 'Good course and good teacher.',
            'rating' => 3,
            'user_id' => 1,
            'course_id' => 1
        ]);
        DB::table('comments')->insert([
            'description' => 'I have enjoyed and learned a lot.',
            'rating' => 5,
            'user_id' => 5,
            'course_id' => 1
        ]);
        DB::table('comments')->insert([
            'description' => 'Can you answer my message? I have some troubles with the lesson 3.',
            'rating' => 5,
            'user_id' => 5,
            'course_id' => 1
        ]);
       
        DB::table('comments')->insert([
            'description' => 'Best course!! Really interesting.',
            'rating' => 4,
            'user_id' => 2,
            'course_id' => 2
        ]);
        DB::table('comments')->insert([
            'description' => 'Good course and good teacher.',
            'rating' => 3,
            'user_id' => 1,
            'course_id' => 2
        ]);
        DB::table('comments')->insert([
            'description' => 'I have enjoyed and learned a lot.',
            'rating' => 1,
            'user_id' => 5,
            'course_id' => 2
        ]);
        DB::table('comments')->insert([
            'description' => 'Can you answer my message? I have some troubles with the lesson 3.',
            'rating' => 2,
            'user_id' => 5,
            'course_id' => 2
        ]);

         DB::table('comments')->insert([
            'description' => 'Best course!! Really interesting.',
            'rating' => 4,
            'user_id' => 2,
            'course_id' => 3
        ]);
        DB::table('comments')->insert([
            'description' => 'Good course and good teacher.',
            'rating' => 1,
            'user_id' => 1,
            'course_id' => 3
        ]);
        DB::table('comments')->insert([
            'description' => 'I have enjoyed and learned a lot.',
            'rating' => 3,
            'user_id' => 5,
            'course_id' => 3
        ]);
        DB::table('comments')->insert([
            'description' => 'Can you answer my message? I have some troubles with the lesson 3.',
            'rating' => 4,
            'user_id' => 5,
            'course_id' => 3
        ]);
         DB::table('comments')->insert([
            'description' => 'Best course!! Really interesting.',
            'rating' => 4,
            'user_id' => 2,
            'course_id' => 5
        ]);
        DB::table('comments')->insert([
            'description' => 'Good course and good teacher.',
            'rating' => 5,
            'user_id' => 1,
            'course_id' => 5
        ]);
        DB::table('comments')->insert([
            'description' => 'I have enjoyed and learned a lot.',
            'rating' => 5,
            'user_id' => 5,
            'course_id' => 5
        ]);
        DB::table('comments')->insert([
            'description' => 'Can you answer my message? I have some troubles with the lesson 3.',
            'rating' => 5,
            'user_id' => 5,
            'course_id' => 5
        ]);
         DB::table('comments')->insert([
            'description' => 'Best course!! Really interesting.',
            'rating' => 4,
            'user_id' => 2,
            'course_id' => 6
        ]);
        DB::table('comments')->insert([
            'description' => 'Good course and good teacher.',
            'rating' => 3,
            'user_id' => 1,
            'course_id' => 7
        ]);
        DB::table('comments')->insert([
            'description' => 'I have enjoyed and learned a lot.',
            'rating' => 5,
            'user_id' => 5,
            'course_id' => 8
        ]);
        DB::table('comments')->insert([
            'description' => 'Can you answer my message? I have some troubles with the lesson 3.',
            'rating' => 5,
            'user_id' => 5,
            'course_id' => 8
        ]);
    }
}
