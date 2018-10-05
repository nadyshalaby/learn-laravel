<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class DBController extends Controller
{
    public function create(Request $req)
    {

        $student = new Student;

        $student->name = 'Khaled Samir';
        $student->tel = '66626262';
        $student->age = 21;
        $student->year = 3;
        $student->dept_id = 2;
        $student->img = 'image.php';

        $student->save();

        // return Student::firstOrNew([
        //     'name' => 'MOstafa Sala',
        //     'tel' => '5665562626263',
        // ]);

        // Student::updateOrCreate(['tel' => '66626262', 'age' => 21,], [
        //     'name' => 'Khaled Samir',
        //     'tel' => '66626262',
        //     'age' => 21,
        //     'year' => 3,
        //     'dept_id' => 2,
        //     'img' => 'image.php',
        // ]);


        // Student::firstOrCreate([
        //     'name' => 'Khaled Samir',
        //     'tel' => '66626262',
        //     'age' => 21,
        //     'year' => 3,
        //     'dept_id' => 2,
        //     'img' => 'image.php',
        // ]);

    }

    public function edit()
    {

        $student = Student::find(3);

        $student->name = 'Khaled Samir';
        $student->tel = '66626262';
        $student->age = 21;
        $student->year = 3;
        $student->dept_id = 2;
        $student->img = 'image.php';

        $student->save();

        // Student::find(3)->update([
        //     'name' => 'Khaled Samir',
        //     'tel' => '66626262',
        //     'age' => 21,
        //     'year' => 3,
        //     'dept_id' => 2,
        //     'img' => 'image.php',
        // ]);
    }

    public function remove()
    {
        // Student::first()->delete();
        Student::destroy([3,4,5]);
    }

    public function show()
    {
        $students = Student::skip(10)->take(10)->get();
        // $students = Student::where('id', 19)->latest()->get();

        return $students;
    }
}
