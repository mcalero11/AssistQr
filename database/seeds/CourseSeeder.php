<?php

use App\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'name' => 'Programación 4',
            'lateAfterTo' => 10,
            'outOfTimeAfterTo' => 20,
        ]);
        Course::create([
            'name' => 'Bases de Datos 2',
            'lateAfterTo' => 17,
            'outOfTimeAfterTo' => 32,
        ]);

        factory(Course::class)->times(23)->create();

    }
}
