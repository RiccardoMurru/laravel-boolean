<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;
    private $genders;

    public function __construct()
    {
        $this->students = config('students.students');
        $this->genders = config('students.genders');
    }

    /**
     * Show student index
     */
    public function index()
    {
        $students = $this->students;
        $genders = $this->genders;

        return view('students.index', compact('students', 'genders'));
    }

    /**
     * Show student detail
     */
    public function show($slug)
    {
        $student = $this->checkStudent($slug, $this->students);

        if (!$student) {
            abort('404');
        }

        return view('students.show', compact('student'));
    }

    /**
     * Check student by id
     */
    private function checkStudent($slug, $array)
    {
        foreach ($array as $item) {
            if ($item['slug'] == $slug)
                return $item;
        }
        return false;
    }
}
