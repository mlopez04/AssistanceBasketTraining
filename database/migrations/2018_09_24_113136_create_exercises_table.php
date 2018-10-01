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

        Schema::create('tags', function (Blueprint $table) {
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
            $table->integer('active');
            $table->timestamps();
        });

        Schema::create('exercise_tag', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('tag_id')->unsigned();
            $table->integer('exercise_id')->unsigned();
            $table->timestamps();

            $table->foreign('tag_id')
                ->references('id')
                ->on('tags')
                ->onDelete('cascade');

            $table->foreign('exercise_id')
                ->references('id')
                ->on('exercises')
                ->onDelete('cascade');

        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercise_tag');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('exercises');
    }
}
