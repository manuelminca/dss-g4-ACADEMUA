<?php

use Illuminate\Database\Seeder;

class delete extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_course')->delete();
        DB::table('course_user')->delete();
        DB::table('categories')->delete();
		DB::table('courses')->delete();
        DB::table('users')->delete();
        DB::table('comments')->delete();


    }
}
