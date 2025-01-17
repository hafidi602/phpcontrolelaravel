@props(['type'])
<!-- Déclare une propriété 'type' pour spécifier le type d'alerte (par exemple, 'success', 'danger'). -->
<div class="alert alert-{{$type}}" role="alert">
    {{$slot}}     <!-- Affiche le contenu transmis au composant. -->
</div>

