<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Category;


class TestCategories extends TestCase
{

    public function testPlayersData()
    {
        $count = Category::all()->count();
        $this->assertEquals($count, 2);

        $this->assertDatabaseHas('categories', ['name' => 'programacion']);
        $this->assertDatabaseHas('categories', ['name' => 'MultOS']);
    }

}
