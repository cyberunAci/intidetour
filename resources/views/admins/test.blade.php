@extends('layouts.app')
@section('content')

<div container id="container">
    <div id="top">Vert</div>
    <div id="contain">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac orci ut velit scelerLorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac orci ut velit scelerisque sodales. Cras nec hendrerit dui, ac dictum dui. Nunc interdum eros id lacinia porta. Mauris volutpat nunc odio, sed rutrum enim vestibulum quis. Integer sed vehicula orci. Vivamus quis enim dui. Integer nec nulla sed velit volutpat venenatis et et tortor. Morbi non urna non sapien venenatis laoreet eu a diam. Praesent quis arcu aliquet, accumsan turpis ac, rhoncus lectus.isque sodales. Cras nec hendrerit dui, ac dictum dui. Nunc interdum eros id lacinia porta. Mauris volutpat nunc odio, sed rutrum enim vestibulum quis. Integer sed vehicula orci. Vivamus quis enim dui. Integer nec nulla sed velit volutpat venenatis et et tortor. Morbi non urna non sapien venenatis laoreet eu a diam. Praesent quis arcu aliquet, accumsan turpis ac, rhoncus lectus.</div>
    <div id="footer">Rouge</div>
</div>


<style>
    #container {
        height: 300px;
        width: 500px;
        background-color: blue;
        text-align: center;
        display:flex;
        flex-direction:column;


    }

    #top {
        align-content: flex-start;
        background-color: green;
    }

    #contain {
        
        align-content: center;
        background-color: yellow;
        align-content: center;
        overflow-y: scroll;

    }

    #footer {
        
        background-color: red;
    }

</style>


@endsection
