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
     * Checks the number and names of the sponsors
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

        $this->assertDatabaseHas('courses', ['id' => 4]);
        $this->assertDatabaseHas('courses', ['id' => 5]);
        $this->assertDatabaseHas('courses', ['id' => 6]);
    }

    public function testCategoriesData()
    {
        $count = Category::all()->count();
        $this->assertEquals($count, 2);

        $this->assertDatabaseHas('categories', ['name' => 'programacion']);
        $this->assertDatabaseHas('categories', ['name' => 'MultOS']);
    }


    /*public function testCoursesByCategory()
    {
        $course = Course::where('name', 'Java')->first();
        $this->assertEquals($course->categoriescourses->count(), 1);
        $this->assertTrue($course->category->contains('name', 'MultOS'));
    }*/

public function testUserstoCourses()
    {

        /*$user = new User();
        $user->name = 'hola';
        $user->email = 'hola';
        $user->username = 'hola';
        $user->password = 'hola';


        $course = new Course();
        $course->id = 4;
        $course->name = 'adios';
        $course->description = 'adios';
        $course->price = 2;*/
       // $course->User()->attach($user->email);

        /*$this->assertEquals($user->courses[0]->name, 'adios');
        $this->assertEquals($user->courses[0]->name, 'hola');*/

        /*$course->User()->detach($user->email);
        $course->delete();
        $user->delete();*/
        $users = User::where('email', 'quico14@gmail.com')->first();
        echo $users;
        //$users->courses()->attach(4);
        $this->assertEquals($users->courses->count(), 1);
        /*
        $users = User::where('email', 'quico14@gmail.com')->first();
        echo $users->courses;
        $this->assertEquals($users->courses->count(), 2);*/
        /*$this->assertTrue($users->courses->contains('id', '3'));
        $this->assertTrue($users->courses->contains('id', '2'));*/

        /*$users = User::where('email', 'manuelminca@gmail.com')->first();
        $this->assertEquals($users->courses->count(), 1);
        $this->assertTrue($users->courses->contains('id', '1'));
        
        $users = User::where('email', 'profesor1@gmail.com')->first();
        $this->assertEquals($users->courses->count(), 1);
        $this->assertTrue($users->courses->contains('id', '1'));
        
        $users = User::where('email', 'asehhu@gmail.com')->first();
        $this->assertEquals($users->courses->count(), 1);
        $this->assertTrue($users->courses->contains('id', '3'));*/
        
    }
}

