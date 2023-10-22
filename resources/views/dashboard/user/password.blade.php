@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Change Password</h1>
  </div>

  @if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div>
  @endif

  @if (session()->has('error'))
    <div class="alert alert-danger col-lg-8" role="alert">
      {{ session('error') }}
    </div>
  @endif

  <div class="col-lg-8">
    <form method="post" action="/dashboard/password/{{ $user->username }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="current_password" class="form-label">Current Password</label>
          <input type="password" class="form-control @error('new_password') is-invalid @enderror" id="current_password" name="current_password" autofocus>
          @error('current_password')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">New Password</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" autofocus>
          @error('password')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="password_confirmation" class="form-label">Password</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password_confirmation" name="password_confirmation" autofocus>
          @error('password_confirmation')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>
        

        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>
  
@endsection