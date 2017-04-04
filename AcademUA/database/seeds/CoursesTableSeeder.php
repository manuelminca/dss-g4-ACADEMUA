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
            'name' => 'Courso completo',
            'description' => 'Learn to master Java 8 core development step-by-step, and make your first unique, advanced program in 30 days ',
            'content' => 'How to build creative, fully-functional Java 8 programs with confidence (whilst having fun, too). How to easily write advanced programs for all computing platforms at once. How to program the right way, cutting out the useless fluff and filler.',
            'links' => 'google.es',
            'price' => 50,
            'teacher_id' => 1
        ]);
        
        DB::table('courses')->insert([
            'name' => 'Java',
            'description' => 'A simple java course',
            'content' => 'Descripcion extensa del curso aqui se tiene que poner todo mas detallado',
            'links' => 'google.es',
            'price' => 100,
            'teacher_id' => 1
        ]);

         DB::table('courses')->insert([
            'name' => 'php',
            'description' => 'A simple php course',
            'content' => 'Descripcion extensa del curso aqui se tiene que poner todo mas detallado',
            'links' => 'google.es',
            'price' => 10000,
            'teacher_id' => 2
        ]);

        DB::table('courses')->insert([
            'name' => 'Curso 4',
            'description' => 'A simple 4 course',
            'content' => 'Descripcion extensa del curso aqui se tiene que poner todo mas detallado',
            'links' => 'google.es',
            'price' => 100,
            'teacher_id' => 2
        ]);

        DB::table('courses')->insert([
            'name' => 'Curso 5',
            'description' => 'A simple 5 course',
            'content' => 'Descripcion extensa del curso aqui se tiene que poner todo mas detallado',
            'links' => 'google.es',
            'price' => 100,
            'teacher_id' => 2
        ]);

        DB::table('courses')->insert([
            'name' => 'Curso 6',
            'description' => 'A simple 6 course',
            'content' => 'Descripcion extensa del curso aqui se tiene que poner todo mas detallado',
            'links' => 'google.es',
            'price' => 100,
            'teacher_id' => 2
        ]);

        DB::table('courses')->insert([
            'name' => 'Curso 7',
            'description' => 'A simple 7 course',
            'content' => 'Descripcion extensa del curso aqui se tiene que poner todo mas detallado',
            'links' => 'google.es',
            'price' => 100,
            'teacher_id' => 2
        ]);
        

    }
}
