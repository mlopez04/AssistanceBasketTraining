<?php

use Illuminate\Database\Seeder;

class ClubsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('clubs')->delete();
        
        \DB::table('clubs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ABVO ',
                'address' => '',
                'city' => 'Villaviciosa de Odón',
                'cp' => '',
                'phone' => '',
                'active' => 1,
                'created_at' => '2018-05-15 12:17:43',
                'updated_at' => '2017-05-15 12:59:06',
            ),
        ));
        
        
    }
}