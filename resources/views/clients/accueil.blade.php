@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
<body>
    <div class="container-fluid">
        @include("clients.accueil.presentation")
        @include("clients.accueil.equipes")
        @include("clients.accueil.circuits")
        @include("clients.accueil.fonctionalites")
        @include("clients.accueil.newsletter")
        @include("clients.accueil.galerie")
        @include("clients.accueil.temoignages")
    </div>
</body>
<script src="/node_modules/jquery/dist/jquery.js"></script>
<script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
</html>
@endsection