<form action="{{ route('createproducts') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="exampleFormControlInput1"
            placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Price</label>
        <input type="number" name="price" class="form-control" id="exampleFormControlInput1"
            placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Dec</label>
        <input type="text" name="dec" class="form-control" id="exampleFormControlInput1"
            placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlFile1">Image</label>
        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <button class="btn-danger btn" type="submit">sub</button>
</form>
