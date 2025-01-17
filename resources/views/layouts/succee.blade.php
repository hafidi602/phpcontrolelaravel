@if (session()->has('success'))  {{--verifier la session est ce qu'il comport un success--}}
<x-alert type="success">{{session('success')}}</x-alert>
{{--afficher success--}}
@endif