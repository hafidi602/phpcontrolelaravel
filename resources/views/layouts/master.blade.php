<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cinema et film | @yield('title')</title>
    <!-- Affiche le titre de la page, en utilisant la section 'title' si elle est définie dans la vue enfant. -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
   <main style="background-image: url('{{ asset('storage/image/background.jpg')}}');">
    <!-- Définit un fond d'écran pour la section principale avec l'image stockée dans 'storage/image/background.jpg'. -->

    <div class="container">
        @yield('main')
        <!-- Affiche le contenu de la section 'main' défini dans la vue enfant. -->
    </div>
   </main>

    @include('footer')
    <!-- Inclut le pied de page à la fin de la page. -->
</body>
</html>
