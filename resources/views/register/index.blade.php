@extends('layouts.main_blogs')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-5">
    <main class="form-signin w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center mt-5">Please Login</h1>
      <form action="/register" method="post">
        @csrf
        <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('username') }}">
            <label for="floatingInput">Name</label>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="text" name="username" class="form-control rounded-top @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
            <label for="floatingInput">Username</label>
            @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control rounded-top @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
          <label for="floatingInput">Email address</label>
          @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control mb-3 rounded-top @error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}"> 
          <label for="floatingInput">Password</label>

          @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    
        <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
      </form>

      <small class="d-block text-center">Already registered? <a href="/login">Login Now</a></small>
    </main>
  </div>
</div>

@endsection