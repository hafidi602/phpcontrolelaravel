@extends('layouts.master') 
@section('title') 
cree nouveau compte 
@endsection 
@extends('layouts.error') 
@section('main')
<div class="container w-7 my-2 bg-light p-5">
    <!-- Formulaire pour créer un nouveau compte -->
    <form action="{{route('store')}}" method="POST">
        @csrf <!-- Génère un token CSRF pour sécuriser la requête POST -->
        
        <!-- Champ pour entrer le nom -->
        <div class="mb-3">
            <input class="form-control" name="nom" type="text" placeholder="nom ">
        </div>

        <!-- Champ pour entrer le prénom -->
        <div class="mb-3">
            <input class="form-control" name="prenom" type="text" placeholder="prenom ">
        </div>

        <!-- Champ pour entrer l'adresse e-mail -->
        <div class="mb-3">
        <input class="form-control" name="email" type="text" placeholder="Adresse e-mail">
        </div>

        <!-- Champ pour entrer le mot de passe -->
        <div class="mb-3">
            <input class="form-control" name="password" type="password" placeholder="mot de passe">
        </div>

        <!-- Champ pour confirmer le mot de passe -->
        <div class="mb-3">
            <input class="form-control" name="password_confirmation" type="password" placeholder="confirmer votre passe">
        </div>

        <!-- Bouton de soumission du formulaire -->
        <div class="d-grid mb-3">
            <input type="submit" class="btn btn-primary btn-block" value="valider">
        </div>
    </form> 
</div>  
@endsection
