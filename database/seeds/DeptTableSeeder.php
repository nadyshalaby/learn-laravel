<?php

use Illuminate\Database\Seeder;
use App\Dept;

class DeptTableSeeder extends Seeder
{

    protected $depts = [
        [
            'name' => 'Computer Science',
            'abbr' => 'CS',
            'capacity' => 500,
        ],
        [
            'name' => 'Information Technology',
            'abbr' => 'IT',
            'capacity' => 700,
        ],
        [
            'name' => 'Information Systems',
            'abbr' => 'IS',
            'capacity' => 620,
        ],
    ];

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        Dept::truncate();

        foreach ($this->depts as $dept) {
            $dp = new Dept($dept);
            $dp->save();
        }
    }
}
