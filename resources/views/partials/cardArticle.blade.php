<div class="text-center text-light m-3"><h2 class="m-0">Articles</h2></div>
<section class="container d-flex flex-wrap justify-content-around mt-3 mb-3">
@foreach ($bigs as $big )
    <div class="card mb-3 mt-3" style="max-width: 600px;">
        <div class="row g-0">
        <div class="col-md-4">
            <img src="{{$big->pictureOg}}" class="img-fluid rounded" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">{{$big->titleOg}}</h5>
            <p class="card-text">{{substr($big->textOg, 0, 80)}}...</p>
            </div>
        </div>
        </div>
        <a href="/showarticle/{{$big->id}}" class="btn btn-primary position-absolute bottom-0 end-0 me-2 mb-1">Show</a>
    </div>  
@endforeach
</section>