<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Hash; 
use App\Models\utilisateur; 
class controllerStore extends Controller
{
    // Fonction pour gérer l'enregistrement d'un nouvel utilisateur
    function store(Request $request)
    {
        // Récupération des données envoyées dans la requête
        $nom = $request->nom;         // Nom de l'utilisateur
        $prenom = $request->prenom;   // Prénom de l'utilisateur
        $email = $request->email;     // Email de l'utilisateur
        $password = $request->password; // Mot de passe de l'utilisateur
        // Validation des données reçues
        $request->validate([
            "nom" => "required", // Le champ 'nom' est obligatoire
            "prenom" => "required", // Le champ 'prenom' est obligatoire
            "email" => "email|unique:utilisateurs", // L'email doit être unique dans la table 'utilisateurs'
            "password" => "min:8|confirmed" // Le mot de passe doit avoir au moins 8 caractères et être confirmé
        ]);
        // Création d'un nouvel utilisateur dans la base de données
        utilisateur::create([
            "nom" => $nom,
            "prenom" => $prenom,
            "email" => $email,
            "password" => Hash::make($password) // Hachage du mot de passe pour des raisons de sécurité
        ]);
        // Redirection vers la page de connexion avec un message de succès
        return redirect()->route('login')->with("success", "Votre compte a été créé avec succès.");
    }
}
