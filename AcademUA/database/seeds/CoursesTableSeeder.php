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
            'price' => 50
        ]);
        
    }
}
