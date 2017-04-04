<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	
	/**
	* Run the database seeds.
        *
        * @return void
        */
    public function run()
    {
		
		$this->call(UsersTableSeeder::class);
		$this->call(CoursesTableSeeder::class);
		$this->call(CategoriesTableSeeder::class);
		
		$this->call(UserscoursesTableSeeder::class);
		$this->call(CategoriescoursesTableSeeder::class);
		$this->call(CommentsTableSeeder::class);
		
		// 		$this->call(delete::class);
	}
}
