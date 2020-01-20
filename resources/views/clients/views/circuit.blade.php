
@extends('layouts.app',['id'=>'circuit'])
@section('content')

 <section class="infos-circuit">
   <div class="section-info-circuit ">

    <h1>{{$circuit['nom']}}</h1><!--Permet de généré le nom d'un circuit depuis la BDD-->
    <span class="badge badge-pill badge-success border-spacing: 5px; p-3 mb-lg-2 mr-2 mr-lg-0 mt-2 mt-md-0">Difficultée: {{$circuit['difficulte']}}</span>
    <span class="badge badge-pill badge-info border-spacing: 5px; p-3 mb-lg-2 mr-2 mr-lg-0 mt-2 mt-md-0">Durée: {{$circuit['duree']}}</span>
    <span class="badge badge-pill badge-dark border-spacing: 5px; p-3 mb-lg-2 mr-2 mr-lg-0 mt-2 mt-md-0">Distance: {{$circuit['distance']}}</span>
    <span class="badge badge-pill badge-danger border-spacing: 5px; p-3 mb-lg-2 mr-2 mr-lg-0 mt-2 mt-md-0">Latitude :{{$circuit['latitude']}} longitude: {{$circuit['longitude']}}</span>
    <div><button type="button" class="btn btn-primary mt-4 mb-3">Téléchargement de la trace</button></div>
   </div>

</section>




<section>
<section class="container flex-row">
 
  <section class="media-body col-lg-8 col-md-12 pr-5 mb-5">
  <h1>Ceci est une description</h1>
  {{$circuit['description']}}
</section>

  <section class="container col-lg-4 col-md-12 text-align-center">
  <img class="d-block col-lg-12 col-md-5 mb-lg-2 mr-2 mr-lg-0" src='{{$circuit["image"]}}'>
  <img class="d-block col-lg-12 col-md-5 mb-lg-2 mr-2 mr-lg-0 mt-2 mt-md-0" src='{{$circuit["image"]}}'>
</section>
</section>
</section>




<section class=" mb-3">

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{$circuit['image']}}" class="d-block" alt="...">
     
    </div>
    <div class="carousel-item">
      <img src="{{$circuit['image']}}" class="d-block" alt="...">
     
    </div>
    <div class="carousel-item">
      <img src='{{$circuit["image"]}}' class="d-block" alt="...">
     
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

@endsection
