<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Show student index
     */
    public function index()
    {
        return view('students.index');
    }
}
