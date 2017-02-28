<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->delete();
        DB::table('courses')->insert([
            'name' => 'cursoPrueba',
            'description' => 'Este es el curso',
            'price' => 50
        ]);
    }
}
