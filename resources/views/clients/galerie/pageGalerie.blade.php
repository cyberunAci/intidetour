@extends('layouts.app')
@section('content')

<h1>galerie</h1>
<div class="row mb-4">
  <div class="col-6 bg-primary">
    <div class="row">
      <div class="col-12 bg-success mb-4">
      <img width="100%" height="200px" src=" {{ asset('images/logotb.png') }}" alt="">
      </div>
      <div class="col-6 bg-danger">
      <img width="100%" height="200px" src=" {{ asset('images/logotb.png') }}" alt="">
      </div>
      <div class="col-6 bg-success">
      <img width="100%" height="200px" src=" {{ asset('images/logotb.png') }}" alt="">
      </div>
    </div>
  </div>
  <div class="col-6 bg-danger"> <img width="100%" height="420px" src=" {{ asset('images/logotb.png') }}" alt=""></div>
</div>

<div class="row ">
  <div class="col-3 bg-success">
  <img width="100%" height="200px" src=" {{ asset('images/logotb.png') }}" alt="">
  </div>
  <div class="col-6 bg-primary">
  <img width="100%" height="200px" src=" {{ asset('images/logotb.png') }}" alt="">
  </div>
  <div class="col-3 bg-success">
  <img width="100%" height="200px" src=" {{ asset('images/logotb.png') }}" alt="">
  </div>
</div>

</html>

@endsection