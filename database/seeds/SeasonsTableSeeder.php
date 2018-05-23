<?php

use Illuminate\Database\Seeder;

class SeasonsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('seasons')->delete();
        
        \DB::table('seasons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '2017/2018 ',
                'created_at' => '2018-05-15 12:17:43',
                'updated_at' => '2017-05-15 12:59:06',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '2018-2019',
                'created_at' => '2018-05-23 14:03:11',
                'updated_at' => '2018-05-23 14:03:11',
            ),
        ));
        
        
    }
}