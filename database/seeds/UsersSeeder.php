<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Usuarios de prueba
        User::create([
            'name' => 'Admin',
            'lastName' => 'Nistrador',
            'email' => 'admin@example.com',
            'password' => bcrypt('Secret'),
            'birthdate' => '1995/08/28',
            'timeZone' => -0,
            'is_instructor' => true,
        ]);
        User::create([
            'name' => 'Marvin',
            'lastName' => 'Calero',
            'email' => 'mjcrequeno@gmail.com',
            'password' => bcrypt('Secret'),
            'birthdate' => '1997/07/28',
            'timeZone' => -6,
            'is_instructor' => true,
        ]);
        User::create([
            'name' => 'Erick',
            'lastName' => 'Flores',
            'email' => 'erickantoniofc@gmail.com',
            'password' => bcrypt('Secret'),
            'birthdate' => '1997/04/18',
            'timeZone' => -6,
            'is_instructor' => true,
        ]);



        // Factories
        factory(User::class)->times(97)->create();

    }

}
