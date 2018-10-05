<?php

use Illuminate\Database\Seeder;
use App\Course;

class CourseTableSeeder extends Seeder
{

    protected $courses = [
        [
            'name' => 'Computer Engineering',
            'code' => 'CS001',
            'num_of_chapters' => 5,
            'dept_id' => 1,
            'teacher_id' => 5,
        ],
        [
            'name' => 'Database Administration',
            'code' => 'CS002',
            'num_of_chapters' => 7,
            'dept_id' => 2,
            'teacher_id' => 4,
        ],
        [
            'name' => 'Information Security',
            'code' => 'CS003',
            'num_of_chapters' => 3,
            'dept_id' => 3,
            'teacher_id' => 3,
        ],
        [
            'name' => 'Computer Networking',
            'code' => 'CS004',
            'num_of_chapters' => 8,
            'dept_id' => 2,
            'teacher_id' => 2,
        ],
        [
            'name' => 'Computer Programming',
            'code' => 'CS005',
            'num_of_chapters' => 4,
            'dept_id' => 3,
            'teacher_id' => 2,
        ],
        [
            'name' => 'Cyber Security',
            'code' => 'CS006',
            'num_of_chapters' => 12,
            'dept_id' => 2,
            'teacher_id' => 2,
        ],
        [
            'name' => 'Computer Forensics',
            'code' => 'CS007',
            'num_of_chapters' => 5,
            'dept_id' => 1,
            'teacher_id' => 5,
        ],
        [
            'name' => 'Web development',
            'code' => 'CS008',
            'num_of_chapters' => 9,
            'dept_id' => 3,
            'teacher_id' => 4,
        ],
    ];

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        Course::truncate();
        
        foreach ($this->courses as $course) {
            $crs = new Course($course);
            $crs->save();
        }
    }
}
