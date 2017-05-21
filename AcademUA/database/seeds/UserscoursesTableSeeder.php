<?php

use Illuminate\Database\Seeder;

class UserscoursesTableSeeder extends Seeder
{
	
	
	/**
	* Run the database seeds.
	         *
	         * @return void
	         */
	        public function run()
	        {
		
		$pk1 = DB::table('users')->where('email','prof@gmail.com')->first();
		$pk2 = DB::table('courses')->where('name', 'How to play Football')->first();
		DB::table('course_user')->insert([
		                    'user_id' => $pk1->id,
		                    'course_id' => $pk2->id
		                ]);
		
		$pk1 = DB::table('users')->where('email','alum@gmail.com')->first();
		$pk2 = DB::table('courses')->where('name', 'Join a Political Party')->first();
		DB::table('course_user')->insert([
		                    'user_id' => $pk1->id,
		                    'course_id' => $pk2->id
		                ]);
		$pk1 = DB::table('users')->where('email','alum@gmail.com')->first();
		$pk2 = DB::table('courses')->where('name', 'php')->first();
		DB::table('course_user')->insert([
		                    'user_id' => $pk1->id,
		                    'course_id' => $pk2->id
		                ]);
		$pk1 = DB::table('users')->where('email','alum@gmail.com')->first();
		$pk2 = DB::table('courses')->where('name', 'Learn English')->first();
		DB::table('course_user')->insert([
		                    'user_id' => $pk1->id,
		                    'course_id' => $pk2->id
		                ]);
		$pk1 = DB::table('users')->where('email','alum@gmail.com')->first();
		$pk2 = DB::table('courses')->where('name', 'Testing')->first();
		DB::table('course_user')->insert([
		                    'user_id' => $pk1->id,
		                    'course_id' => $pk2->id
		                ]);
		
		$pk1 = DB::table('users')->where('email','asehhu@gmail.com')->first();
		$pk2 = DB::table('courses')->where('name', 'php')->first();
		DB::table('course_user')->insert([
		                    'user_id' => $pk1->id,
		                    'course_id' => $pk2->id
		                ]);
		
		$pk1 = DB::table('users')->where('email','quico14@gmail.com')->first();
		$pk2 = DB::table('courses')->where('name', 'php')->first();
		DB::table('course_user')->insert([
		                    'user_id' => $pk1->id,
		                    'course_id' => $pk2->id
		                ]);
		
		$pk1 = DB::table('users')->where('email','quico14@gmail.com')->first();
		$pk2 = DB::table('courses')->where('name', 'How to play Football')->first();
		DB::table('course_user')->insert([
		                    'user_id' => $pk1->id,
		                    'course_id' => $pk2->id
		                ]);
	}
	
}

