@extends('layouts.main')

@section('container')

<style>
  @media (max-width: 768px) { 
    .container {
      margin-top:100px;
      margin-bottom:70px;
    }
   }
</style>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-4">
      
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <main style="margin-top:65px;"  class="form-signin">
      <img class="mt-2 mb-2" src="img/barang.png" alt="" width="100" style="margin-left:120px">
      <h1 class="h4 mb-3 fw-normal text-center ">Please login</h1>
      <form action="/login" method="post">
        @csrf
        <div class="form-floating mt-4">
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" autofocus required value="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
    
        <button style="background-color:black;" class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      </form>
      <small style="margin-bottom:102px;" class="d-block text-center mt-3 ">Not registered? <a style="color:#588157" href="register">Register Now!</a></small>
    </main>
  </div>
</div>
</div>

@endsection