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
        $deleteAll = false;
        if($deleteAll){
            $this->call(delete::class);
        } else {
            $this->call(CoursesTableSeeder::class);
            $this->call(CategoriesTableSeeder::class);
            $this->call(UsersTableSeeder::class);
            $this->call(UserscoursesTableSeeder::class);
            $this->call(CategoriescoursesTableSeeder::class);
        }
        
       // $this->call(delete::class);
    }
}
