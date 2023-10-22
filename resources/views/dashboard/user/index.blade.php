@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome, {{ $user->name }}</h1>
  </div>

  @if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div>
  @endif
  <div class="d-flex flex-wrap pt-3 pb-2 mb-3">
    <div class="col-lg-5 me-3">
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
    </div>
    <div class="col-lg-5 me-3">
      <div class="mb-3">
        <label for="postsCount" class="form-label">Jumlah Posts</label>
        <input type="text" class="form-control @error('postsCount') is-invalid @enderror" id="postsCount" name="postsCount" required autofocus value="{{ $user->posts->count() }}" disabled>
        @error('postsCount')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="accountCreated" class="form-label">Account Created</label>
        <input type="text" class="form-control @error('accountCreated') is-invalid @enderror" id="accountCreated" name="accountCreated" required autofocus value="{{ $user->created_at->isoFormat('D MMMM YYYY, HH:mm:ss') }}" disabled>
        @error('accountCreated')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="updateProfile" class="form-label">Latest Profile Update</label>
        <input type="text" class="form-control @error('updateProfile') is-invalid @enderror" id="updateProfile" name="updateProfile" required autofocus value="{{ $user->updated_at->isoFormat('D MMMM YYYY, HH:mm:ss') }}" disabled>
        @error('updateProfile')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>
    </div>
  </div>
  <div class="col me-5">
    <div class="justify-content-end">
      <a class="btn btn-primary me-2" href="/dashboard/user/{{ $user->username }}/edit">Edit Profile</a>
    </div>
  </div>

  
@endsection