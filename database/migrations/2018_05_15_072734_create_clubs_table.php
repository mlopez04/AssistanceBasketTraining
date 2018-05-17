<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('cp')->nullable();
            $table->string('phone')->nullable();
            $table->integer('active');
            $table->timestamps();
        });

        Schema::create('seasons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('season_id')->unsigned()->nullable();
            $table->foreign('season_id')->references('id')
                ->on('seasons')->onDelete('cascade');

            $table->string('category');
            //$table->string('nameseason');
            $table->timestamps();
        });


        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('club_id')->unsigned()->nullable();
            $table->foreign('club_id')->references('id')
                ->on('clubs')->onDelete('cascade');


            $table->integer('category_id')->unsigned()->nullable();;
            $table->foreign('category_id')->references('id')
                ->on('categories')->onDelete('cascade');


            $table->integer('season_id')->unsigned()->nullable();;
            $table->foreign('season_id')->references('id')
                ->on('seasons')->onDelete('cascade');

            $table->string('name');
            $table->string('gender');
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
        Schema::dropIfExists('clubs');
        Schema::dropIfExists('seasons');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('teams');
    }
}
