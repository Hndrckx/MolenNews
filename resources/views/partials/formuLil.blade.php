<section class="container">
<form action="/adminlil" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label text-light">Title</label>
        <input type="text" name='titleLil' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label text-light">Author</label>
        <input type="text" name="authorLil" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label text-light">Text</label>
        <input type="text" name="textLil" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label text-light">URL Picture</label>
        <input type="text" name="pictureLil" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    
    <button type="submit" class="btn btn-primary m-3">Submit</button>
</form>
</section>
