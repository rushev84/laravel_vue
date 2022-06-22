<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons = [
            [
                'id' => 1,
                'name' => 'Ivan',
                'age' => 20,
                'job' => 'dev'
            ],
            [
                'id' => 2,
                'name' => 'Elena',
                'age' => 30,
                'job' => 'manager'
            ],
            [
                'id' => 3,
                'name' => 'Petr',
                'age' => 40,
                'job' => 'director'
            ],
        ];
        return $persons;
    }
}
