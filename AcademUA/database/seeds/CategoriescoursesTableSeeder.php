<?php

use Illuminate\Database\Seeder;

class CategoriescoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $pk1 = DB::table('categories')->where('name','programacion')->first();
        $pk2 = DB::table('courses')->where('name', 'cursoPrueba')->first();
        DB::table('categoriescourses')->insert([
            'category_name' => $pk1->name,
            'course_id' => $pk2->id
        ]);
    }
}
