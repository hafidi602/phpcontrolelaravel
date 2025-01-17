<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerlogin extends Controller
{
    // Fonction pour afficher la page de connexion
    function login()
    {
        return view('login'); // Retourne la vue 'login' pour afficher le formulaire de connexion
    }
}
