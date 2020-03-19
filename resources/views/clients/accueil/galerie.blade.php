<section class="d-flex flex-column justify-content-center align-items-center m-5">
    <div class="row">
        <div class="col-lg-12">
            <h2>Galerie</h2>
        </div>
    </div>

    <div class="row">
        <div class="d-flex flex-row w-100">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($galerie as $key=>$galerie)
                    <div class="carousel-item {{$key==0?'active':''}}">
                        <img src="{{$galerie->photo->photo}}" height="300px" width="400px" class="" alt="" id="myImg">
                    </div>
                    @endforeach  
                </div>
            </div>
        </div>
    </div>


</section>