<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Entrenador',
                'created_at' => '2018-05-25 09:52:00',
                'updated_at' => '2018-05-25 09:52:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Presidente',
                'created_at' => '2018-05-25 09:52:05',
                'updated_at' => '2018-05-25 09:52:05',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Director Técnico',
                'created_at' => '2018-05-25 09:52:19',
                'updated_at' => '2018-05-25 09:52:19',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'admin',
                'created_at' => '2018-05-25 10:06:22',
                'updated_at' => '2018-05-25 10:06:22',
            ),
        ));
        
        
    }
}