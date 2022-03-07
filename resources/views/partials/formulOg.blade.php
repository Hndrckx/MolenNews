<section class="container my-3">
    <form action="/adminog" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-light">Title</label>
            <input type="text" name='titleOg' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-light">Author</label>
            <input type="text" name="authorOg" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-light">Text</label>
            <textarea type="text" name="textOg" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-light">URL Picture</label>
            <input type="text" name="pictureOg" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <button type="submit" class="btn btn-primary mb-3 mt-3">Submit</button>
    </form>
    </section>