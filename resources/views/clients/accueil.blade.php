@extends('layouts.app')
@section('content')

<body>
    <div class="container">
        @include("clients.accueilIntidetour")
        @include("clients.accueilEquipe")
        @include("clients.accueilCircuits")
        @include("clients.accueilFonctionalites")
        @include("clients.newsletter")
        @include("clients.accueilGalerie")
        @include("clients.accueilTemoignages")
    </div>
</body>

</html>

@endsection