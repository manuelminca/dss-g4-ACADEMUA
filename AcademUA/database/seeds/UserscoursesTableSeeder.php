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
        
        $pk1 = DB::table('users')->where('email','profesor1@gmail.com')->first();
        $pk2 = DB::table('courses')->where('name', 'cursoPrueba')->first();
        DB::table('userscourses')->insert([
            'user_email' => $pk1->email,
            'course_id' => $pk2->id
        ]);
    }
}