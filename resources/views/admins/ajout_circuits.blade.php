@extends('layouts.app')
@section('content')
<form action="" method="post">
    <label>
        Nom du circuit
    </label>
    <input type="text" name="nom" id="nom">
    <label>
            Image du circuit
        </label>
        <input type="text" name="image" id="image">
        <label>
                Difficulté du circuit
            </label>
            <input type="text" name="difficulte" id="difficulte">
            <label>
                    Description du circuit
                </label>
                <input type="text" name="description" id="description">
    <input type="button" value="ajouter">
</form>
@endsection