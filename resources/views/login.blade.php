@extends('layouts.master') <!-- Utilisation du layout master pour l'ensemble de la page -->

@section('title') 
login <!-- Titre de la page de connexion -->
@endsection

@extends('layouts.error') <!-- Inclusions pour afficher les erreurs -->
@extends('layouts.succee') <!-- Inclusions pour afficher les succès -->

@section('main')
    <!-- Section principale avec un fond d'écran -->
    <div style="background-image: url('{{ asset('storage/image/background.jpg')}}');">
        <div class="container w-7 my-2 bg-light p-5" >
            <!-- Formulaire de connexion -->
            <form action="{{route('auth')}}" method="POST">
                @csrf <!-- Token CSRF pour la sécurité -->
                <div class="mb-3">
                    <!-- Champ pour l'adresse e-mail -->
                    <input class="form-control" name="email" type="text" placeholder="Adresse e-mail">
                    @error('email')
                        <!-- Affichage des erreurs liées à l'email -->
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <!-- Champ pour le mot de passe -->
                    <input class="form-control" name="password" type="password" placeholder="mot de passe">
                    <div class="d-grid m-3">
                        <!-- Bouton pour se connecter -->
                        <input type="submit" class="btn btn-primary btn-block" value="Se connecter">
                        <br>
                        <!-- Lien pour créer un compte -->
                        <a href="{{route('create')}}" class="btn btn-primary btn-block">cree un compte</a>
                    </div>
                </div>
            </form> 
        </div>  
    </div>
@endsection
