<?php

use Illuminate\Support\Facades\Route;

Route::get('/sobre-nosotros', function () {
    $integrantes = [
        [
            'nombre' => 'Agu Federico Migdonio',
            'slug' => 'federico-agu',
            'github_user' => 'agufedee',
        ],
        [
            'nombre' => 'Masacote Nahuel',
            'slug' => 'nahuel-masacote',
            'github_user' => 'nahuelmasacote',
        ],
        [
            'nombre' => 'Noguera Bruno Santiago',
            'slug' => 'bruno-noguera',
            'github_user' => 'n0guera',
        ],
        [
            'nombre' => 'Olmedo Eric',
            'slug' => 'eric-olmedo',
            'github_user' => 'ericolmedo',
        ],
        [
            'nombre' => 'Viotti Pablo Elias',
            'slug' => 'pablo-viotti',
            'github_user' => 'EliasViotti',
        ],
    ];

    return view('sobre-nosotros', compact('integrantes'));
})->name('sobre-nosotros');

