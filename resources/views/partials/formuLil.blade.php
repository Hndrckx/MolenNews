<section class="container my-3">
    <form action="/adminlil" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-light">Title</label>
            <input type="text" name='titleLil' class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-light">Author</label>
            <input type="text" name="authorLil" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-light">Text</label>
            <textarea type="text" name="textLil" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-light">URL Picture</label>
            <input type="text" name="pictureLil" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary mb-3 mt-3">Submit</button>
    </form>
</section>

<section class="container my-3">
    @foreach ($blogs as $blog)
        <div class="d-flex justify-content-between rounded bg-white p-2 mt-2">
            <h2 class="text-black mt-1">{{ $blog->titleLil }}</h2>
            <form action="/delete/{{ $blog->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-info text-light bg-danger ms-3 mt-1 border-0">Delete</button>
            </form>
        </div>
    @endforeach
</section>
