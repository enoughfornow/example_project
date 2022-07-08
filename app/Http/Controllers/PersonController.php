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
                'name' => 'kolya',
                'age' => 19,
                'job' => 'swuimmer'
            ],
            [
                'id' => 2,
                'name' => 'asasas',
                'age' => 25,
                'job' => 'developer'
            ],
            [
                'id' => 3,
                'name' => 'alex',
                'age' => 23,
                'job' => 'loler'
            ],
        ];
        return $persons;
    }
}
