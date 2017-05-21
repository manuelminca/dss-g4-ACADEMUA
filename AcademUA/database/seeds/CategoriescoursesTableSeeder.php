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
        $pk2 = DB::table('courses')->where('name', 'Testing')->first();
        DB::table('category_course')->insert([
            'category_id' => $pk1->id,
            'course_id' => $pk2->id
        ]);

        $pk1 = DB::table('categories')->where('name','MultOS')->first();
        $pk2 = DB::table('courses')->where('name', 'Java Course')->first();
        DB::table('category_course')->insert([
            'category_id' => $pk1->id,
            'course_id' => $pk2->id
        ]);

        $pk1 = DB::table('categories')->where('name','Sports')->first();
        $pk2 = DB::table('courses')->where('name', 'How to play Football')->first();
        DB::table('category_course')->insert([
            'category_id' => $pk1->id,
            'course_id' => $pk2->id
        ]);

        $pk1 = DB::table('categories')->where('name','Politics')->first();
        $pk2 = DB::table('courses')->where('name', 'Join a Political Party')->first();
        DB::table('category_course')->insert([
            'category_id' => $pk1->id,
            'course_id' => $pk2->id
        ]);

        $pk1 = DB::table('categories')->where('name','MultOS')->first();
        $pk2 = DB::table('courses')->where('name', 'php')->first();
        DB::table('category_course')->insert([
            'category_id' => $pk1->id,
            'course_id' => $pk2->id
        ]);
        $pk1 = DB::table('categories')->where('name','Sports')->first();
        $pk2 = DB::table('courses')->where('name', 'Play Tennis')->first();
        DB::table('category_course')->insert([
            'category_id' => $pk1->id,
            'course_id' => $pk2->id
        ]);
        
    }
}
