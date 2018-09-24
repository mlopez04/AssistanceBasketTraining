<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('category_exercises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('active');
            $table->timestamps();
        });


        Schema::create('exercises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('number')->nullable();
            $table->text('objetive')->nullable();
            $table->text('material')->nullable();
            $table->text('description')->nullable();
            $table->integer('duration')->nullable();
            $table->string('image')->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('active');
            $table->timestamps();
        });

        Schema::create('exercise_categories', function (Blueprint $table) {

            $table->integer('category_exercise_id')->unsigned();
            $table->integer('exercise_id')->unsigned();
            $table->timestamps();

            $table->foreign('category_exercise_id')
                ->references('id')
                ->on('category_exercises')
                ->onDelete('cascade');

            $table->foreign('exercise_id')
                ->references('id')
                ->on('exercises')
                ->onDelete('cascade');

            $table->primary(['category_exercise_id', 'exercise_id']);

        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercise_categories');
        Schema::dropIfExists('category_exercises');
        Schema::dropIfExists('exercises');
    }
}
