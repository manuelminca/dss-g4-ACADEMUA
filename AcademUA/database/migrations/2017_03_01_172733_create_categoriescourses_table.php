<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriescoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoriescourses', function (Blueprint $table) {
            $table->text('course_id');
            $table->text('category_name');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('category_name')->references('name')->on('categories');
            $table->primary(['course_id', 'category_name']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoriescourses');
    }
}
