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
        $pk2 = DB::table('courses')->where('name', 'Curso completo')->first();
        DB::table('category_course')->insert([
            'category_id' => $pk1->id,
            'course_id' => $pk2->id
        ]);

        $pk1 = DB::table('categories')->where('name','MultOS')->first();
        $pk2 = DB::table('courses')->where('name', 'Java')->first();
        DB::table('category_course')->insert([
            'category_id' => $pk1->id,
            'course_id' => $pk2->id
        ]);
    }
}
