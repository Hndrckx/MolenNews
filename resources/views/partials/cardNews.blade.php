<div class="text-center text-light m-3"><h2 class="m-0">News</h2></div>
<section class="container d-flex flex-wrap justify-content-around mt-3 mb-3">
    @foreach ($littles as $little )
        <div class="card mt-3 mb-3" style="max-width: 600px;">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="{{$little->pictureLil}}" class="img-fluid rounded" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">{{$little->titleLil}}</h5>
                <p class="card-text">{{substr($little->textLil, 0, 80)}}...</p>
                </div>
            </div>
            </div>
            <a href="/shownew/{{$little->id}}" class="btn btn-primary position-absolute bottom-0 end-0 me-2 mb-1">Show</a>
        </div>  
    @endforeach
    </section>