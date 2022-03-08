<section class="container d-flex justify-content-around mt-3">
@foreach ($bigs as $big )
    <div class="card mb-3 position-relative" style="max-width: 540px;">
        <div class="row g-0">
        <div class="col-md-4">
            <img src="{{$big->pictureOg}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">{{$big->titleOg}}</h5>
            <p class="card-text">{{substr($big->textOg, 0, 80)}}...</p>
            </div>
        </div>
        </div>
        <a href="/showarticle/{{$big->id}}" class="btn btn-primary position-absolute bottom-0">Show</a>
    </div>  
@endforeach
</section>