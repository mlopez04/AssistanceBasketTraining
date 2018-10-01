<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Juegos de inicio',
                'active' => 1,
                'created_at' => '2018-10-01 10:33:23',
                'updated_at' => '2018-10-01 10:33:23',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Tiro',
                'active' => 1,
                'created_at' => '2018-10-01 10:33:30',
                'updated_at' => '2018-10-01 10:33:30',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Bote en estático',
                'active' => 1,
                'created_at' => '2018-10-01 10:57:16',
                'updated_at' => '2018-10-01 10:57:16',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Bote de velocidad',
                'active' => 1,
                'created_at' => '2018-10-01 10:57:22',
                'updated_at' => '2018-10-01 10:57:22',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Pivotes',
                'active' => 1,
                'created_at' => '2018-10-01 14:31:50',
                'updated_at' => '2018-10-01 14:31:50',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Pase',
                'active' => 1,
                'created_at' => '2018-10-01 14:32:05',
                'updated_at' => '2018-10-01 14:32:05',
            ),
        ));
        
        
    }
}