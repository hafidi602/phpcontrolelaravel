@if ($errors->any()) {{--verifer si un erreur est existe --}}
@foreach ($errors->all() as $error) {{--parcourire le tableau des erreurs existe--}}
<x-alert type="danger">{{$error}}</x-alert> {{--afficher dans un alert de type danger --}}
@endforeach
@endif