<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           
        DB::table('courses')->insert([
            'name' => 'cursoPrueba',
            'description' => 'Este es el curso',
            'price' => 50,
            'teacher_id' => 1
        ]);
        
        DB::table('courses')->insert([
            'name' => 'Java',
            'description' => 'A simple java course',
            'price' => 100,
            'teacher_id' => 1
        ]);

         DB::table('courses')->insert([
            'name' => 'php',
            'description' => 'A simple php course',
            'price' => 10000,
            'teacher_id' => 2
        ]);

        DB::table('courses')->insert([
            'name' => 'Curso 4',
            'description' => 'A simple 4 course',
            'price' => 100,
            'teacher_id' => 2
        ]);

        DB::table('courses')->insert([
            'name' => 'Curso 5',
            'description' => 'A simple 5 course',
            'price' => 100,
            'teacher_id' => 2
        ]);

        DB::table('courses')->insert([
            'name' => 'Curso 6',
            'description' => 'A simple 6 course',
            'price' => 100,
            'teacher_id' => 2
        ]);

        DB::table('courses')->insert([
            'name' => 'Curso 7',
            'description' => 'A simple 7 course',
            'price' => 100,
            'teacher_id' => 2
        ]);
        

    }
}
