<?php

use Illuminate\Database\Seeder;

class ExercisesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('exercises')->delete();
        
        \DB::table('exercises')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Perseguimos a',
                'number' => NULL,
                'objetive' => 'Juego de presentación',
                'material' => NULL,
                'description' => 'Todos con balón persiguen a XXX para que se conozcan los nombres. Vamos añadiendo nombres...tienen que tocarle e ir al círculo de enmedio y consiguen 1 punto.',
                'duration' => 10,
                'image' => NULL,
                'active' => 1,
                'created_at' => '2018-10-01 10:33:46',
                'updated_at' => '2018-10-01 10:56:21',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Muralla creciente',
                'number' => NULL,
                'objetive' => 'Como bulldog, sólo 1 la liga en medio con balón',
                'material' => NULL,
                'description' => 'Como bulldog, sólo 1 la liga en medio con balón. Los demás van pasando botando de un lado a otro y metiendo canastas. Si me pillan me coloco en la línea de ½ campo con mi balón botando como muralla pero no puedo pillar a nadie. Gana el que más canastas meta',
                'duration' => 10,
                'image' => 'uploads/muralla-creciente.jpg',
                'active' => 1,
                'created_at' => '2018-10-01 14:27:52',
                'updated_at' => '2018-10-01 14:27:52',
            ),
        ));
        
        
    }
}