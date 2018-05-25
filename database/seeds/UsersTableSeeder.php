<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Mar López',
                'email' => 'marlopezlainez@gmail.com',
                'password' => '$2y$10$gCyujcNzFhrycPq9GQxJzemLCIJooZuw7UvswKKIjFq6uvbwTQSx.',
                'remember_token' => '9shMCiavqw9ySENWjgoLs1irbbBRFxImPkBo5O2LUP8cIuEfTE3hWi8RTf6O',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Juanjo',
                'email' => 'juanjo@example.com',
                'password' => '$2y$10$aVd7iAhe4ENsALslLgGqL.sgSqK71gRihpm9cLQpb2Fe9QE3ztZ9y',
                'remember_token' => 'PyjsvAblSVcRosxr5sPcDovApnxlISiFVmawBYXYt0MNrIUBlBgixiauKJnu',
                'created_at' => '2018-05-25 10:06:59',
                'updated_at' => '2018-05-25 10:06:59',
            ),
        ));
        
        
    }
}