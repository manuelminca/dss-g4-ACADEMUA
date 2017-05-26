<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'name' => 'prof',
            'username' => 'prof',
            'email' => 'prof@gmail.com',
            'description' => 'I have been teaching for 10 years',
            'password' => bcrypt('dasdas'),
            'professor' => true,
            'admin' => false
        ]);

         DB::table('users')->insert([
            'name' => 'alum',
            'username' => 'alum',
            'email' => 'alum@gmail.com',
            'password' => bcrypt('dasdas'),
            'description' => 'Im a student',
            'professor' => false,
            'admin' => false
        ]);

         DB::table('users')->insert([
            'name' => 'yerai',
            'username' => 'asehhu',
            'email' => 'asehhu@gmail.com',
            'description' => 'Im a student',
            'password' => bcrypt('dasdas'),
            'professor' => false,
            'admin' => false
        ]);

         DB::table('users')->insert([
            'name' => 'quico',
            'username' => 'quico14',
            'email' => 'quico14@gmail.com',
            'description' => 'The sky is the limit',
            'password' => bcrypt('dasdas'),
            'professor' => true,
            'admin' => false
        ]);
        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@academua.com',
            'description' => 'Im a student',
            'password' => bcrypt('dasdas'),
            'professor' => false,
            'admin' => true
        ]);
        DB::table('users')->insert([
            'name' => 'Carlos',
            'username' => 'carlos',
            'email' => 'carlos@gmail.com',
            'description' => 'DSS professor',
            'password' => bcrypt('dasdas'),
            'professor' => true,
            'admin' => false
        ]);
        DB::table('users')->insert([
            'name' => 'Eli',
            'username' => 'eli',
            'email' => 'ali@gmail.com',
            'description' => 'I am the coordinator of PPSS',
            'password' => bcrypt('dasdas'),
            'professor' => true,
            'admin' => false
        ]);
        DB::table('users')->insert([
            'name' => 'Guardiola',
            'username' => 'guardiola',
            'email' => 'guardiola@gmail.com',
            'description' => 'Manchester City <3',
            'password' => bcrypt('dasdas'),
            'professor' => true,
            'admin' => false
        ]);
        
    }
}

