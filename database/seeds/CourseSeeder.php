<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course')->insert([
            'name' => 'Programación 1',
            'lateAfterTo' => 5,
            'outOfTimeAfterTo' => 15,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        DB::table('course')->insert([
            'name' => 'Base de datos 2',
            'lateAfterTo' => 7,
            'outOfTimeAfterTo' => 29,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        DB::table('course')->insert([
            'name' => 'Gramática',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        DB::table('course')->insert([
            'name' => 'Matemática 2',
            'lateAfterTo' => 5,
            'outOfTimeAfterTo' => 15,
            'active' => 0,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

    }
}
