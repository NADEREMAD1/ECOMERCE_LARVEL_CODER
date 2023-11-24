<form action="{{ route('createproducts') }}" method="POST" enctype="multipart/form-data">
    @include('incloud.errors')

    @csrf
    <div class="mb-3">
        <label for="Title" class="form-label">title</label>
        <input type="text" name="title" class="form-control" id="name" placeholder="name">
    </div>
    <div class="mb-3">
        <label for="Price" class="form-label">Price</label>
        <input type="number" name="price" class="form-control" id="Price" placeholder="Price">
    </div>
    <div class="mb-3">
        <label for="Dec" class="form-label">Dec</label>
        <input type="text" name="dec" class="form-control" id="Dec" placeholder="Dec">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">catagories_id</label>
        <input type="text" name="catagories_id" class="form-control" id="exampleFormControlInput1"
            placeholder="catagories id">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlFile1">Image</label>
        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <button class="btn-danger btn" type="submit">sub</button>
</form>
