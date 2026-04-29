<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        $firstname = "Nico";
        $familyname = "Deblauwe";
        $person = "$firstname $familyname";
        $age = 45;

        $hobbies = ['koken', 'fietsen', 'film kijken', 'web development'];

        $family = [
            ['name' => 'Katrijn', 'gender' => 'female'],
            ['name' => 'Aster', 'gender' => 'female'],
            ['name' => 'Merel', 'gender' => 'female'],
            ['name' => 'Iben', 'gender' => 'male'],
            ['name' => 'Nico', 'gender' => 'male'],
        ];

        $familyAsObject = [
            (object) ['name' => 'Katrijn', 'gender' => 'female'],
            (object) ['name' => 'Aster', 'gender' => 'female'],
            (object) ['name' => 'Merel', 'gender' => 'female'],
            (object) ['name' => 'Iben', 'gender' => 'male'],
            (object) ['name' => 'Nico', 'gender' => 'male'],
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