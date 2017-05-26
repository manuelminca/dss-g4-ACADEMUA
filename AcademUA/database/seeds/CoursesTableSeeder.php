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
            'name' => 'Java Course',
            'description' => 'Learn to master Java 8 core development step-by-step, and make your first unique, advanced program in 30 days ',
            'content' => 'How to build creative, fully-functional Java 8 programs with confidence (whilst having fun, too). How to easily write advanced programs for all computing platforms at once. How to program the right way, cutting out the useless fluff and filler.',
            'price' => 50,
            'teacher_id' => 1,
            'created_at' => mktime(6, 2, 3, 1, 4, 2017)
        ]);

        // 'content' => 'How to build creative, fully-functional Java 8 programs with confidence (whilst having fun, too). How to easily write advanced programs for all computing platforms at once. How to program the right way, cutting out the useless fluff and filler.',
        
        DB::table('courses')->insert([
            'name' => 'How to play Football',
            'description' => 'Be the best one of your friends',
            'content' => 'It explains all the things that the user needs to know about football',
            'price' => 100,
            'teacher_id' => 1,
            'created_at' => mktime(12, 5, 33, 4, 2, 2017)
        ]);

         DB::table('courses')->insert([
            'name' => 'php',
            'description' => 'A simple php course',
            'content' => 'Make a new Academua 2.0',
            'price' => 10000,
            'teacher_id' => 1,
            'created_at' => mktime(16, 12, 53, 1, 4, 2017)
        ]);

        DB::table('courses')->insert([
            'name' => 'Join a Political Party',
            'description' => 'How to join to PP and PSOE',
            'content' => 'All the steps to be the next president',
            'price' => 15,
            'teacher_id' => 2,
            'created_at' => mktime(23, 25, 3, 3, 22, 2017)
        ]);

        DB::table('courses')->insert([
            'name' => 'Play Tennis',
            'description' => 'Nadal Approves this',
            'content' => 'This course is ment to be the ultimate course to play the best tennis',
            'price' => 20,
            'teacher_id' => 1,
            'created_at' => '2017-04-01'
        ]);

        DB::table('courses')->insert([
            'name' => 'Testing',
            'description' => 'PPSS',
            'content' => 'All you need to know to pass PPSS',
            'price' => 9999,
            'teacher_id' => 1,
            'created_at' => '2017-04-01'
        ]);

        DB::table('courses')->insert([
            'name' => 'Ride a Car',
            'description' => 'How to ride a car',
            'content' => 'you will need a ferrari to be the best lad',
            'price' => 40,
            'teacher_id' => 2,
            'created_at' => '2017-04-01'
        ]);
         DB::table('courses')->insert([
            'name' => 'Learn English',
            'description' => 'Level C1',
            'content' => 'Be like a native person!',
            'price' => 75,
            'teacher_id' => 2,
            'created_at' => '2017-04-01'
        ]);
         DB::table('courses')->insert([
            'name' => 'Castellano',
            'description' => 'Aprueba en 2 meses',
            'content' => 'Sesiones inolvidables y unicas',
            'price' => 40,
            'teacher_id' => 2,
            'created_at' => '2017-04-01'
        ]);
         DB::table('courses')->insert([
            'name' => 'Best Coffe',
            'description' => 'Make the best coffe in the world!',
            'content' => 'Follow the steps to make a better espresso than an Italian ',
            'price' => 0,
            'teacher_id' => 2,
            'created_at' => '2017-04-01'
        ]);
        

    }
}
