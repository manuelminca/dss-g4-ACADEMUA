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
            'content' => 'Descripcion extensa del curso aqui se tiene que poner todo mas detallado',
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
