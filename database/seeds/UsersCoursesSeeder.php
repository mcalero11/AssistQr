<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Course;
class UsersCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(2); //Buscar por id=2
        $course = Course::find(1);
        $user->courses()->attach($course, ['type' => 1]); //Agregar registro en la tabla pivot
        $user = User::find(3);
        $user->courses()->attach($course, ['type' => 2]);
    }
}
