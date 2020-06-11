<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;

    public function __construct()
    {
        $this->students = [
            [
                'id' => 1,
                'img' => 'https://www.boolean.careers/images/students/biagini.png',
                'name' => 'Alessandro Biagini',
                'age' => 25,
                'company' => 'DISC SPA',
                'role' => 'web developer',
                'gender' => 'm',
                'description' => "Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer."
            ],
            [
                'id' => 2,
                'img' => 'https://www.boolean.careers/images/students/poggini.png',
                'name' => 'Paola Poggini',
                'age' => 24,
                'company' => 'Prima Assicurazioni',
                'role' => 'junior software engineer',
                'gender' => 'f',
                'description' => "A 24 anni, dopo aver conseguito il diploma linguistico ha deciso di intraprendere fin da subito un percorso nel mondo Tech. Ad oggi ricopre il ruolo di Junior Software Engineer."
            ],
            [
                'id' => 3,
                'img' => 'https://www.boolean.careers/images/students/masetti.png',
                'name' => 'Loana Masetti',
                'age' => 36,
                'company' => 'The Zen Agency',
                'role' => 'web develope',
                'gender' => 'f',
                'description' => "Ha scoperto la passione per l'informatica creando un blog di psicologia, ambito in cui si era specializzata durante gli studi. Il suo cuore però non vuol sentir ragione e Loana cambia carriera e diventa una ricercatissima sviluppatrice web."
            ],
            [
                'id' => 4,
                'img' => 'https://www.boolean.careers/images/students/patruno.png',
                'name' => 'Davide Patruno',
                'age' => 29,
                'company' => 'ArmadioVerde',
                'role' => 'web develope',
                'gender' => 'm',
                'description' => "Dopo la laurea magistrale in scienze umanistiche e sociali, si concentra sullo sviluppo di strategie marketing. Decide di cambiare vita, questa volta puntando sullo sviluppo Front-End."
            ]
        ];
    }

    /**
     * Show student index
     */
    public function index()
    {
        $students = $this->students;

        return view('students.index', compact('students'));
    }

    /**
     * Show student detail
     */
    public function show($id)
    {
        $student = $this->checkStudent($id, $this->students);

        if (!$student) {
            abort('404');
        }

        return view('students.show', compact('student'));
    }

    /**
     * Check student by id
     */
    private function checkStudent($id, $array)
    {
        foreach ($array as $item) {
            if ($item['id'] == $id)
                return $item;
        }
        return false;
    }
}
