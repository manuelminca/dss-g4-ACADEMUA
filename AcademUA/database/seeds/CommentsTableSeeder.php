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
                    'course_id' => 2,
                    'user_id' => 1,
		        ]);
    }
}
