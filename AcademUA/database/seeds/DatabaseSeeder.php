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
		if(true){
		$this->call(UsersTableSeeder::class);
		$this->call(CoursesTableSeeder::class);
		$this->call(CategoriesTableSeeder::class);
		
		$this->call(UserscoursesTableSeeder::class);
		$this->call(CategoriescoursesTableSeeder::class);
		$this->call(CommentsTableSeeder::class);
		//$this->call(MessagesTableSeeder::class);
		$this->call(SessionsTableSeeder::class);
		}else{
			//Delete data from database
	 		$this->call(delete::class);
		}
		//Insert data into DB
	}
}