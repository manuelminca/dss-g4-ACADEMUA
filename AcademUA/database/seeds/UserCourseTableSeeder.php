<?php

use Illuminate\Database\Seeder;

class UserCourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_courses')->delete();

        $pk1 = DB::table('users')->where('email','ejemplo@gmail.com')->first();
        $pk2 = DB::table('courses')->where('id, 1')->first();
        DB::table('courses')->insert([
            'user_email' => $pk1->email,
            'course_id' => $pk2->id
        ]);
    }
}
