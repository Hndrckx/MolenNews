<section class="container">
    @foreach ($littles as $little )
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="{{$little->pictureLil}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">{{$little->titleLil}}</h5>
                <p class="card-text">{{substr($little->textLil, 0, 80)}}...</p>
                </div>
            </div>
            </div>
        </div>  
    @endforeach
    </section>