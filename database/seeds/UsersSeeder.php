<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
        DB::table('users')->insert([
            'name' => 'Marvin',
            'lastName' => 'Calero',
            'email' => 'mjcrequeno@gmail.com',
            'password' => bcrypt('secret'),
            'birthDate' => '1997/07/28',
            'timeZone' => -6,
            'isInstructor' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('users')->insert([
            'name' => 'Erick',
            'lastName' => 'Flores',
            'email' => 'erickantoniofc@gmail.com',
            'password' => bcrypt('secret'),
            'birthDate' => '1997/01/01',
            'timeZone' => -6,
            'isInstructor' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('users')->insert([
            'name' => 'Paco',
            'lastName' => 'Chavez',
            'email' => 'paco@test.com',
            'password' => bcrypt('secret'),
            'birthDate' => '1997/05/03',
            'timeZone' => -6,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        DB::table('users')->insert([
            'name' => 'Carmen',
            'lastName' => 'Gonzales',
            'email' => 'carmen@test.com',
            'password' => bcrypt('secret'),
            'birthDate' => '1996/11/01',
            'timeZone' => -6,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        DB::table('users')->insert([
            'name' => 'Isabel',
            'lastName' => 'Pereira',
            'email' => 'isabel@test.com',
            'password' => bcrypt('secret'),
            'birthDate' => '1999/01/30',
            'timeZone' => -6,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        DB::table('users')->insert([
            'name' => 'Martín',
            'lastName' => 'Torres',
            'email' => 'martin@test.com',
            'password' => bcrypt('secret'),
            'birthDate' => '1999/04/29',
            'timeZone' => -6,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        DB::table('users')->insert([
            'name' => 'Otro',
            'lastName' => 'Canales',
            'email' => 'otro@test.com',
            'password' => bcrypt('secret'),
            'birthDate' => '1997/02/01',
            'timeZone' => -1,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

    }

}
