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
        
        DB::table('users')->delete();
        DB::table('users')->insert([
            'name' => 'profesor1',
            'username' => 'profesor1',
            'email' => 'profesor1@gmail.com',
            'password' => 'dasdas'
        ]);
        
    }
}