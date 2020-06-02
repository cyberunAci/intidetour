@extends('layouts.app')
@section('content')

<section>
    <h2>À propos</h2>

    <div class="card bg-light mb-3" >
      <div class="card-body">
        <p class="card-text">@foreach($apropos as $apropos)
          {{$apropos->text}}
          @endforeach</p>
      </div>
    </div>
</section>

@endsection