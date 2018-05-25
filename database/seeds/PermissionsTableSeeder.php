<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'club-crud',
                'created_at' => '2018-05-25 11:39:45',
                'updated_at' => '2018-05-25 11:39:45',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'categories-crud',
                'created_at' => '2018-05-25 11:40:03',
                'updated_at' => '2018-05-25 11:40:03',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'season-crud',
                'created_at' => '2018-05-25 11:41:05',
                'updated_at' => '2018-05-25 11:41:05',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'file-manager',
                'created_at' => '2018-05-25 11:41:51',
                'updated_at' => '2018-05-25 11:41:51',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'settings',
                'created_at' => '2018-05-25 11:41:58',
                'updated_at' => '2018-05-25 11:41:58',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'permission-manager',
                'created_at' => '2018-05-25 11:48:34',
                'updated_at' => '2018-05-25 11:48:34',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'team-crud',
                'created_at' => '2018-05-25 15:24:16',
                'updated_at' => '2018-05-25 15:24:16',
            ),
        ));
        
        
    }
}