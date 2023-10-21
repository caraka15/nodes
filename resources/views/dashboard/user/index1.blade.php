@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome Back, {{ $user->name }}</h1>
  </div>

  @if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div>
  @endif

  <div class="col-lg-8">
        <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" disabled>
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>

        <div class="mb-3">
          <label for="username" class="form-label">username</label>
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required autofocus value="{{ old('username', $user->username) }} " disabled>
          @error('username')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ $user->email }}" disabled>
          @error('email')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>
        

        <a class="btn btn-primary" href="/dashboard/user/{{ $user->username }}/edit">Edit Profile</a>
</div>
  
@endsection