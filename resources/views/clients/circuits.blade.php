@extends('layouts.app')
@section('content')

<h1 class="text-center m-5">catalogue de circuits</h1>
<div class="container">

  

    @foreach($circuits as $circuit)
   

    <div class="card mb-3 " style="width: 100%;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{$circuit->image}}" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"> {{$circuit->nom}}</h5>

                    <p class="card-text">{{$circuit->description}}</p>
                    <p class="card-text"><small class="text-muted">durée</small></p>
                    <p class="card-text"><small class="text-muted">distance</small></p>
                    <p class="card-text"><small class="text-muted">{{$circuit->difficulte}}</small></p>
                    <p class="card-text"><small class="text-muted">mots cles</small> <small class="text-muted">mots cles</small></p>
                </div>
            </div>
        </div>
    </div>


    @endforeach

</div>

</html>

@endsection