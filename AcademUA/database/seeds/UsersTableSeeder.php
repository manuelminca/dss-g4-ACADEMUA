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
            'password' => bcrypt('dasdas'),
            'professor' => true,
            'admin' => false
        ]);

         DB::table('users')->insert([
            'name' => 'alum',
            'username' => 'alum',
            'email' => 'alum@gmail.com',
            'password' => bcrypt('dasdas'),
            'professor' => false,
            'admin' => false
        ]);

         DB::table('users')->insert([
            'name' => 'yerai',
            'username' => 'asehhu',
            'email' => 'asehhu@gmail.com',
            'password' => bcrypt('dasdas'),
            'professor' => false,
            'admin' => false
        ]);

         DB::table('users')->insert([
            'name' => 'quico',
            'username' => 'quico14',
            'email' => 'quico14@gmail.com',
            'password' => bcrypt('dasdas'),
            'professor' => true,
            'admin' => false
        ]);
        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@academua.com',
            'password' => bcrypt('dasdas'),
            'professor' => false,
            'admin' => true
        ]);
        
    }
}

