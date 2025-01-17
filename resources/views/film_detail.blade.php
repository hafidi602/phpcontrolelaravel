@extends('layouts.master') 
@section('title') 
detail_film 
@endsection 
@section('main')
<div class='row'>
    <!-- Affichage de la carte du film avec ses détails -->
    <x-card :film="$film"/>

    <!-- Affichage de la durée du film -->
    <h3 style="color: white">{{$film->duree}} duree : </h3>

    <!-- Affichage du résumé du film -->
    <p style="color: white">{{$film->resumer}}</p>
</div>

<!-- Bouton pour regarder le film -->
<a href="{{route('watch',$film->id)}}" class="btn btn-primary">Regarder</a>

<!-- Bouton pour revenir à la page précédente -->
<a href="{{route('interface')}}" class="btn btn-primary">Precedent</a>
@endsection
