@extends('User.layout')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body container p-3">
                <h4 class="card-title text-center">CONTACT US</h4>
                <form class="forms-sample" method="POST" action="{{ route('create.contact') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail3"
                            placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">Phone</label>
                        <input name="phone" type="number" class="form-control" id="exampleInputCity1"
                            placeholder="phone" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="exampleTextarea1">Textarea</label>
                        <textarea name="subject" class="form-control" id="exampleTextarea1" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit
                    </button>
                </form>

            </div>
        </div>
    </div>
{{-- Alert From ContactUs --}}
    @if (session('success'))
        <script>
            alert('{{ session('success') }}');
        </script>
    @endif
    @if (session('error'))
        <script>
            alert('{{ session('error') }}');
        </script>
    @endif
@endsection
