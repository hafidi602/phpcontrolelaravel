<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Gère les requêtes HTTP (extraction des données des formulaires, etc.)
use Illuminate\Support\Facades\Auth; // Fournit des méthodes pour l'authentification

class controllerAuth extends Controller
{
    /**
     * Fonction auth
     * Cette fonction gère l'authentification des utilisateurs.
     * Elle reçoit les informations saisies (email et mot de passe) et tente de connecter l'utilisateur.
     *
     * @param Request $request La requête HTTP contenant les données saisies par l'utilisateur.
     * @return \Illuminate\Http\RedirectResponse Redirection vers une page ou retour avec une erreur.
     */
    function auth(Request $request)
    {
        // Récupération des données du formulaire
        $email = $request->email; // Email de l'utilisateur
        $password = $request->password; // Mot de passe de l'utilisateur

        // Création d'un tableau contenant les identifiants saisis
        $user = [
            "email" => $email, // Email saisi
            "password" => $password // Mot de passe saisi
        ];

        // Tentative d'authentification avec les identifiants fournis
        if (Auth::attempt($user)) {
            // Si l'authentification réussit, régénération de la session utilisateur
            $request->session()->regenerate();

            // Redirection vers la page principale (interface utilisateur)
            return redirect()->route('interface');
        } else {
            // Si l'authentification échoue, retour à la page précédente avec un message d'erreur
            return back()->withErrors([
                "email" => "email ou mot de passe est incorrect " // Message d'erreur affiché
            ]);
        }
    }
}
