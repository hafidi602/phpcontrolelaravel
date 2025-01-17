@extends('layouts.master') 
<x-nav/> <!-- Inclut la navigation dans la page -->

@section('title') 
liste des films    
@endsection 

@section('main')
    <!-- Affichage de la barre de recherche -->
    <x-recherche/>

    <!-- Affichage de la liste des films -->
    <div class="row">
        @foreach ($films as $film)
            <!-- Pour chaque film, affichage de la carte du film -->
            <x-card :film='$film'/>
        @endforeach
    </div>

    <!-- Liens de pagination pour naviguer entre les pages de films -->
    {{$films->links()}}
@endsection
