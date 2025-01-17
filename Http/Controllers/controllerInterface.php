<?php
namespace App\Http\Controllers;

use App\Models\films;
use Illuminate\Http\Request;

class controllerInterface extends Controller
{
    // Affiche les films paginés sur la page principale
    function interface()
    {
        $films = films::paginate(12); // Récupère 12 films par page
        return view('interface', compact('films')); // Affiche la vue 'interface'
    }

    // Affiche les détails d'un film spécifique
    function detail(Request $request)
    {
        $id = $request->id; // Récupère l'ID du film
        $film = films::findOrFail($id); // Trouve le film ou retourne une erreur 404
        return view('film_detail', compact('film')); // Affiche la vue 'film_detail'
    }

    // Affiche la page pour visionner un film
    function watch(Request $request)
    {
        $id = $request->id; // Récupère l'ID du film
        $video = films::find($id); // Trouve le film
        return view('watch', compact('video')); // Affiche la vue 'watch'
    }

    // Recherche des films par nom
    function recherche(Request $request)
    {
        $films = films::where('nom', 'like', "%$request->nom%")->get(); // Recherche par nom
        return view('recherche', compact('films')); // Affiche la vue 'recherche'
    }

    // Filtre les films historiques
    function historique()
    {
        $films = films::where('type', 'like', "%historique%")->get(); // Filtre par type 'historique'
        return view('recherche', compact('films'));
    }

    // Filtre les films d'horreur
    function horreur()
    {
        $films = films::where('type', 'like', "%horreur%")->get(); // Filtre par type 'horreur'
        return view('recherche', compact('films'));
    }

    // Filtre les films d'action
    function action()
    {
        $films = films::where('type', 'like', "%action%")->get(); // Filtre par type 'action'
        return view('recherche', compact('films'));
    }

    // Filtre les films romantiques
    function romantique()
    {
        $films = films::where('type', 'like', "%romantique%")->get(); // Filtre par type 'romantique'
        return view('recherche', compact('films'));
    }
}
