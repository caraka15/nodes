@extends('layouts.main_blogs')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-5 mt-5">

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

    <main class="form-signin w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
      
      <form action="/login" method="post">
        @csrf
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
          <label for="floatingInput">Email address</label>
          @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control mb-3" id="password" placeholder="Password" autofocus required>
          <label for="floatingInput">Password</label>
          @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
          @enderror
        </div>
    
        <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
      </form>

      <small class="d-block text-center">Not registered? <a href="/register">Register Now</a></small>
    </main>
  </div>
</div>

@endsection