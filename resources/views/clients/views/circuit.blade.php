
@extends('layouts.app',['id'=>'circuit'])
@section('content')

 <section class="infos-circuit">
   <div class="section-info-circuit ">

    <h1>{{$circuit['nom']}}</h1><!--Permet de généré le nom d'un circuit depuis la BDD-->
    <span class="badge badge-pill badge-primary border-spacing: 5px; p-3">{{$circuit['difficulte']}}</span>
    <span class="badge badge-pill badge-info border-spacing: 5px; p-3">Durée: 1h</span>
    <span class="badge badge-pill badge-success border-spacing: 5px; p-3">Distance: 1km</span>
    <span class="badge badge-pill badge-danger border-spacing: 5px; p-3">Altitude :-210499 longitude: 55,4272</span>
    <div><button type="button" class="btn btn-primary mt-4">Téléchargement de la trace</button></div>
   </div>

</section>




<section>
<section class="container">
 
  <section class="media-body col-lg-8 col-md-12 pr-5">
  <h1>Ceci est une description</h1>
  {{$circuit['description']}}
</section>

  <section class="container col-lg-4 col-md-12">
  <img class="d-block col-lg-12 col-md-6 " src="{{$circuit['image']}}">
  <p>&nbsp;</p><!--Permet de mettre l'espace entre les deux images-->
<img class="d-block col-lg-12 col-md-6 " src="https://via.placeholder.com/180x180">
</section>
</section>



<!--<section>

<img  class="d-block w-40 h-100" src="https://via.placeholder.com/1060x300">

</section>-->

@endsection
