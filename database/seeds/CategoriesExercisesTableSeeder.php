<?php

use Illuminate\Database\Seeder;

class CategoriesExercisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('category_exercises')->delete();

        \DB::table('category_exercises')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Juegos de inicio',
                    'active' => 1,
                    'created_at' => '2018-09-24 15:06:59',
                    'updated_at' => '2018-09-24 15:06:59',
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Tiro',
                    'active' => 1,
                    'created_at' => '2018-09-24 15:06:59',
                    'updated_at' => '2018-09-24 15:06:59',
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Pase',
                    'active' => 1,
                    'created_at' => '2018-09-24 15:06:59',
                    'updated_at' => '2018-09-24 15:06:59',
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Manejo de balón estático',
                    'active' => 1,
                    'created_at' => '2018-09-24 15:06:59',
                    'updated_at' => '2018-09-24 15:06:59',
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Manejo de balón movimiento',
                    'active' => 1,
                    'created_at' => '2018-09-24 15:06:59',
                    'updated_at' => '2018-09-24 15:06:59',
                ),
        ));
    }
}
