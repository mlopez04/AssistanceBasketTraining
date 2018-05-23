<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'season_id' => 1,
                'category' => 'Escuelas Baby Basket',
                'created_at' => '2018-05-15 12:17:43',
                'updated_at' => '2017-05-15 12:59:06',
            ),
            1 => 
            array (
                'id' => 2,
                'season_id' => 1,
                'category' => 'Pre-benjamin',
                'created_at' => '2018-05-15 12:17:43',
                'updated_at' => '2017-05-15 12:59:06',
            ),
            2 => 
            array (
                'id' => 3,
                'season_id' => 1,
                'category' => 'Benjamin',
                'created_at' => '2018-05-15 12:17:43',
                'updated_at' => '2017-05-15 12:59:06',
            ),
            3 => 
            array (
                'id' => 4,
                'season_id' => 2,
                'category' => 'Baby Basket',
                'created_at' => '2018-05-23 14:03:24',
                'updated_at' => '2018-05-23 14:03:24',
            ),
        ));
        
        
    }
}