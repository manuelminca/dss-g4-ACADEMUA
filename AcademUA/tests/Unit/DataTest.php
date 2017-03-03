<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\User;
use App\Course;
use App\Category;

class DataTest extends TestCase
{
	
	
	
	
	
	/**
	*Checks the number and names of the sponsors
				*
				* @return void
				*/
	
	public function testUsersData()
				{
		$count = User::all()->count();
		$this->assertEquals($count, 4);
		
		$this->assertDatabaseHas('users', ['email' => 'manuelminca@gmail.com']);
		$this->assertDatabaseHas('users', ['email' => 'profesor1@gmail.com']);
		$this->assertDatabaseHas('users', ['email' => 'asehhu@gmail.com']);
		$this->assertDatabaseHas('users', ['email' => 'quico14@gmail.com']);
		
		$this->assertDatabaseHas('users', ['username' => 'manuelminca']);
		$this->assertDatabaseHas('users', ['username' => 'profesor1']);
		$this->assertDatabaseHas('users', ['username' => 'asehhu']);
		$this->assertDatabaseHas('users', ['username' => 'quico14']);
		
		$this->assertDatabaseHas('users', ['password' => 'dasdas']);
		
	}
	
	public function testCoursesData()
				{
		$count = Course::all()->count();
		$this->assertEquals($count, 3);
		
		$this->assertDatabaseHas('courses', ['name' => 'cursoPrueba']);
		$this->assertDatabaseHas('courses', ['name' => 'Java']);
		$this->assertDatabaseHas('courses', ['name' => 'php']);
		
		$this->assertDatabaseHas('courses', ['id' => 1]);
		$this->assertDatabaseHas('courses', ['id' => 2]);
		$this->assertDatabaseHas('courses', ['id' => 3]);
	}
	
	public function testCategoriesData()
				{
		$count = Category::all()->count();
		$this->assertEquals($count, 2);
		
		$this->assertDatabaseHas('categories', ['name' => 'programacion']);
		$this->assertDatabaseHas('categories', ['name' => 'MultOS']);
	}
	
	
	
	
	public function testCoursesByCategory()
			{
		$course = Course::where('name', 'Java')->first();
		//$course->categories()->attach(1);
		$this->assertEquals($course->categories->count(), 1);
		//$this->assertTrue($course->category->contains('name', 'MultOS'));
	}
	
	
	public function testUserstoCourses()
		{
		
		
		$users = User::where('email', 'quico14@gmail.com')->first();
		//$users->courses()->attach(4);
		$this->assertEquals($users->courses->count(), 2);		
	}
}


