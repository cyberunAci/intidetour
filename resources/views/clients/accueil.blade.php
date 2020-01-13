@extends('layouts.app')
@section('content')

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
    <div>
        {{ csrf_token() }}
    </div>
</body>

</html>

@endsection