<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar tablas
        $this->VaciarTablas([
            'users',
            'course',
        ]);

        //Ejecutar Seeders
        $this->call(UsersSeeder::class);
        $this->call(CourseSeeder::class);
    }

    /**
     * Clean all the tables before running the seeder
     *
     * @param array[]
     *
     * @return void
     */
    public function VaciarTablas(array $tablas){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
