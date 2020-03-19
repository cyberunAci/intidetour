@extends('layouts.app')
@section('content')

<h1 class="text-center mt-4">Contactez-Nous</h1>

<section class="container p-4 rounded-lg">

<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card border-secondary col-12 m-3"><br>
<form action="{{ url('contact') }}" method="POST">
    @csrf
    <div class="form-row">
    <div class="form-group col-md-5">
    <label for="nom">Nom :</label>
    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Votre nom" value="{{ old('nom') }}">
    @error('nom')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

    <div class="m-1"></div>
    <div class="form-group col-md-5">
    <label for="nom">Prénom :</label>
    
    <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" id="prenom" placeholder="Votre prénom" value="{{ old('prenom') }}">
    @error('prenom')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    </div>

    <div class="form-group">
        <label for="email">Email :</label>
        <input id="email" type="email" class="form-control form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Votre email" value="{{ old('email') }}">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
    <label for="objet">Objet :</label>
    <input id="objet" type="text" class="form-control" name="objet" id="objet" placeholder="Votre objet" value="{{ old('objet') }}">
    @error('objet')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

    <div class="form-group">
        <label for="message">Message :</label>
        <textarea class="form-control  @error('message') is-invalid @enderror" name="message" id="message" placeholder="Votre message">{{ old('message') }}</textarea>
        @error('message')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div><br>

    <p class="text-center"><button type="submit" class="btn btn-primary">Envoyer</button></p>
</form>
        </div>
    </div>
</div>
</section> 


@endsection
