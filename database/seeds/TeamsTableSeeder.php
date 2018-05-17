<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
                    'name' => 'Escuelas Baby Basket',
                    'gender' => 'mixto',
                    'created_at' => '2018-05-15 20:54:43',
                    'updated_at' => '2017-05-15 20:54:06',
                ),

//            1 =>
//                array (
//                    'id' => 2,
//                    'season_id' => 1,
//                    'category' => 'Pre-benjamin',
//                    'created_at' => '2018-05-15 12:17:43',
//                    'updated_at' => '2017-05-15 12:59:06',
//                ),
//
//            2 =>
//                array (
//                    'id' => 3,
//                    'season_id' => 1,
//                    'category' => 'Benjamin',
//                    'created_at' => '2018-05-15 12:17:43',
//                    'updated_at' => '2017-05-15 12:59:06',
//                ),
        ));
    }
}
