
@extends('layouts.app',['id'=>'circuit'])
@section('content')



  <section class="container">
      
 <section class="infos-circuit text-left mb-5">
    <h1>{{$circuit['nom']}}</h1><!--Permet de généré le nom d'un circuit depuis la BDD-->
    <span class="badge badge-pill badge-success  p-3 mb-lg-2 mr-2 mr-lg-0 mt-2 mt-md-0">Difficultée: {{$circuit['difficulte']}}</span>
    <span class="badge badge-pill badge-info  p-3 mb-lg-2 mr-2 mr-lg-0 mt-2 mt-md-0">Durée: {{$circuit['duree']}}</span>
    <span class="badge badge-pill badge-dark  p-3 mb-lg-2 mr-2 mr-lg-0 mt-2 mt-md-0">Distance: {{$circuit['distance']}}</span>
    <span class="badge badge-pill badge-danger  p-3 mb-lg-2 mr-2 mr-lg-0 mt-2 mt-md-0">Latitude :{{$circuit['latitude']}}</span>
    <span class="badge badge-pill badge-secondary  p-3 mb-lg-2 mr-2 mr-lg-0 mt-2 mt-md-0">longitude: {{$circuit['longitude']}}</span>
      <div><button type="button" class="btn btn-primary text-align-center mt-3">Téléchargement de la trace</button></div>
    
</section>
    <section class="row">
  
    <div class="media-body  px-lg-0 col-lg-8 col-md-12">
  
    {{$circuit['description']}}
    </div>

    <div class="col-lg-4 col-md-12 text-align-center mt-4">
    <img class="img-fluid rounded px-lg-0 col-lg-12 mb-3" src='{{$circuit["image"]}}'>
    <img class="img-fluid rounded px-lg-0 col-lg-12 mb-3" src=https://via.placeholder.com/150/FF0000/FFFFFF>
    </div>

  </section>



<section class="mb-3 mt-5">


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active min-height: 500px;">
      <img src="{{$circuit['image']}}" class="img-fluid rounded" alt="Responsive image">

    </div>
    <div class="carousel-item min-height: 500px">
      <img src="{{$circuit['image']}}" class="img-fluid rounded" alt="Responsive image">

    </div>
    <div class="carousel-item min-height: 500px;">
      <img src='{{$circuit["image"]}}' class="img-fluid rounded" alt="Responsive image">

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
