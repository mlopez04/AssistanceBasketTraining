<?php

use Illuminate\Database\Seeder;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
        ));
    }
}
