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
            'name' => 'profesor1',
            'username' => 'profesor1',
            'email' => 'profesor1@gmail.com',
            'password' => 'dasdas',
            'professor' => true
        ]);

         DB::table('users')->insert([
            'name' => 'manuel',
            'username' => 'manuelminca',
            'email' => 'manuelminca@gmail.com',
            'password' => 'dasdas',
            'professor' => false
        ]);

         DB::table('users')->insert([
            'name' => 'yerai',
            'username' => 'asehhu',
            'email' => 'asehhu@gmail.com',
            'password' => 'dasdas',
            'professor' => false
        ]);

         DB::table('users')->insert([
            'name' => 'quico',
            'username' => 'quico14',
            'email' => 'quico14@gmail.com',
            'password' => 'dasdas',
            'professor' => true
        ]);
        
    }
}
