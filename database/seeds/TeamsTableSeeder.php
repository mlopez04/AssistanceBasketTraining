<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teams')->delete();
        
        \DB::table('teams')->insert(array (
            0 => 
            array (
                'id' => 1,
                'club_id' => 1,
                'category_id' => 1,
                'season_id' => 1,
                'name' => 'Equipo Baby Basket',
                'gender' => 'mix',
                'created_at' => '2018-05-15 20:54:43',
                'updated_at' => '2018-05-23 13:51:46',
            ),
            1 => 
            array (
                'id' => 2,
                'club_id' => 1,
                'category_id' => 3,
                'season_id' => 1,
                'name' => 'Benjamín azul',
                'gender' => 'mix',
                'created_at' => '2018-05-23 13:51:28',
                'updated_at' => '2018-05-23 13:51:28',
            ),
            2 => 
            array (
                'id' => 3,
                'club_id' => 1,
                'category_id' => 1,
                'season_id' => 2,
                'name' => 'Baby  Basket 2018-2019',
                'gender' => 'fem',
                'created_at' => '2018-09-24 09:52:11',
                'updated_at' => '2018-09-24 09:52:11',
            ),
        ));
        
        
    }
}