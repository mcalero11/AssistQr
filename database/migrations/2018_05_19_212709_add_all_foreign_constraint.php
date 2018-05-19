<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAllForeignConstraint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('student_course', function (Blueprint $table){
            $table->foreign('student_id')->references('id')->on('users');
            $table->foreign('course_id')->references('id')->on('course');
        });

        schema::table('instructor_course', function (Blueprint $table){
            $table->foreign('instructor_id')->references('id')->on('users');
            $table->foreign('course_id')->references('id')->on('course');
        });

        schema::table('timetable', function (Blueprint $table){
            $table->foreign('course_id')->references('id')->on('course');
        });

        schema::table('class_session', function (Blueprint $table){
            $table->foreign('timetable_id')->references('id')->on('timetable');
        });

        schema::table('attendance', function (Blueprint $table){
            $table->foreign('student_id')->references('id')->on('users');
            $table->foreign('class_session_id')->references('id')->on('class_session');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('student_course', function (Blueprint $table){
            $table->dropForeign(['student_id']);
            $table->dropForeign(['course_id']);
        });

        schema::table('instructor_course', function (Blueprint $table){
            $table->dropForeign(['instructor_id']);
            $table->dropForeign(['course_id']);
        });

        schema::table('timetable', function (Blueprint $table){
            $table->dropForeign(['course_id']);
        });

        schema::table('class_session', function (Blueprint $table){
            $table->dropForeign(['timetable_id']);
        });

        schema::table('attendance', function (Blueprint $table){
            $table->dropForeign(['student_id']);
            $table->dropForeign(['class_session_id']);
        });
    }
}
