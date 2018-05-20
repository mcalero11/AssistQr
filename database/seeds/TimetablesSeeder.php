<?php

use Illuminate\Database\Seeder;
class TimetablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Timetable::create([
            'course_id' => 1,
            'dayOfWeek' => 6,
            'startTime' => '20:30:00',
            'endingTime' => '22:10:00',
        ]);
        App\Timetable::create([
            'course_id' => 2,
            'dayOfWeek' => 6,
            'startTime' => '22:20:00',
            'endingTime' => '0:0:00',
        ]);
        App\Timetable::create([
            'course_id' => 1,
            'dayOfWeek' => 7,
            'startTime' => '14:50:00',
            'endingTime' => '16:30:00',
        ]);
        App\Timetable::create([
            'course_id' => 2,
            'dayOfWeek' => 7,
            'startTime' => '16:40:00',
            'endingTime' => '18:20:00',
        ]);

        factory(App\Timetable::class)->times(21)->create();
    }
}
