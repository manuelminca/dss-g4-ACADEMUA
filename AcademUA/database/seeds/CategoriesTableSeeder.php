<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
	
	
	/**
	* Run the database seeds.
		     *
		     * @return void
		     */
		    public function run()
		    {
		
		DB::table('categories')->insert([
				            'name' => 'programacion'
				        ]);
		
		DB::table('categories')->insert([
				            'name' => 'MultOS'
				        ]);
		DB::table('categories')->insert([
				            'name' => 'Politics'
				        ]);
		
		DB::table('categories')->insert([
				            'name' => 'Networking'
				        ]);
		DB::table('categories')->insert([
				            'name' => 'Sports'
				        ]);
		
		DB::table('categories')->insert([
				            'name' => 'English'
				        ]);
		
		
	}
}
