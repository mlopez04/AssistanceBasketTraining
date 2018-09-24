<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->date('date')->nullable();
            $table->integer('number')->nullable();
            $table->text('objetive')->nullable();
            $table->text('materials')->nullable();
            $table->integer('team_id')->unsigned()->nullable();
            $table->foreign('team_id')->references('id')
                ->on('teams')->onDelete('cascade');
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
        Schema::dropIfExists('workout');
        Schema::dropIfExists('exercises');
        Schema::dropIfExists('exercises_workout');
    }
}
