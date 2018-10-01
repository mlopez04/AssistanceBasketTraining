<?php

use Illuminate\Database\Seeder;

class ExerciseTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('exercise_tag')->delete();
        
        \DB::table('exercise_tag')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tag_id' => 1,
                'exercise_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'tag_id' => 2,
                'exercise_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'tag_id' => 1,
                'exercise_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}