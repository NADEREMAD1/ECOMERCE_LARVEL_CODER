@extends('admin.layout')
@section('content')
<h1>
    s
</h1>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex auth login-bg">
          <div class="card col-lg-11 mx-auto">
            <div class="card-body">
              <h3 class="card-title text-left mb-3">Register</h3>
              <form action="{{'register_admin'}}">
                @csrf
                @include('admin.includ.errors')
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="name" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>image</label>
                  <input type="file" name="image" class="form-control p_input">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Rigester</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@endsection
