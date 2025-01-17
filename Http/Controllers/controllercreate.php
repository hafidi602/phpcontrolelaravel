<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllercreate extends Controller
{
    function create()
    {
        // Retourne la vue 'create', qui contient probablement un formulaire d'inscription.
        return view('create');
    }
}
