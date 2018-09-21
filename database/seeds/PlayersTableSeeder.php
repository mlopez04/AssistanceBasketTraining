<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('players')->delete();

        \DB::table('players')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Paula',
                    'surname' => 'González López',
                    'phone' => '660237427',
                    'email' => 'marlopezlainez@gmail.com',
                    'age' => '6',
                    'date_of_birth' => '2011-10-07',
                    'gender' => '',
                    'image' => 'mix',
                    'created_at' => '2018-05-15 20:54:43',
                    'updated_at' => '2018-05-23 13:51:46',
                ),
            1 =>
                array (
                    'id' => 1,
                    'name' => 1,
                    'surname' => 1,
                    'phone' => 1,
                    'email' => 'Equipo Baby Basket',
                    'age' => 'mix',
                    'gender' => 'mix',
                    'image' => 'mix',
                    'created_at' => '2018-05-15 20:54:43',
                    'updated_at' => '2018-05-23 13:51:46',
                ),
        ));
    }
}
