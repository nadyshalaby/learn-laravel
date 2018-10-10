<?php

use Illuminate\Database\Seeder;

class CourseStudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 100) as $v) {
            DB::table('course_student')->insert([
                'student_id' => mt_rand(1, 100),
                'course_id' => mt_rand(1, 8),
            ]);
        }
    }
}
