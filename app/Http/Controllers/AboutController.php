<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        $firstname = "Trang";
        $familyname = "Nguyen";
        $person = "$firstname $familyname";
        $age = 21;

        $hobbies = ['koken', 'film kijken', 'spelletjes spelen'];

        $family = [
            ['name' => 'Daniil', 'gender' => 'male'],
            ['name' => 'Trang', 'gender' => 'female'],
            ['name' => 'Y', 'gender' => 'female'],
            ['name' => 'Long', 'gender' => 'male'],
            ['name' => 'Tam', 'gender' => 'male'],
        ];

        $familyAsObject = [
            (object) ['name' => 'Daniil', 'gender' => 'male'],
            (object) ['name' => 'Trang', 'gender' => 'female'],
            (object) ['name' => 'Y', 'gender' => 'female'],
            (object) ['name' => 'Long', 'gender' => 'male'],
            (object) ['name' => 'Tam', 'gender' => 'male'],
        ];

        return view('about', [
            'person' => $person,
            'age' => $age,
            'hobbies' => $hobbies,
            'family' => $family,
            'familyAsObject' => $familyAsObject,
        ]);
    }
}