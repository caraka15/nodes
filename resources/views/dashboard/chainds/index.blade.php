@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Chaind List</h1>
  </div>

  @if (session()->has('success'))
    <div class="alert alert-success col-lg-6" role="alert">
      {{ session('success') }}
    </div>
  @endif

  <div class="table-responsive col-lg-6">
    <a href="/dashboard/chainds/create" class="btn btn-primary mb-3">Create new chaind</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Logo</th>
          <th scope="col">Name</th>
          <th scope="col">Type</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($chainds as $chaind)
            <tr class="align-middle">
                <td>{{ $loop->iteration }}</td>
                <td><img src="{{ asset('storage/' . $chaind->logo) }}" style="width: 40px;
                  height: 30x;
                  border-radius: 50%;
                  border: 2px solid #eeeeee;" alt="{{ $chaind->name }}"></td>
                <td>{{ $chaind->name }}</td>
                <td>{{ $chaind->type }}</td>
                <td>
                    <a href="/dashboard/chainds/{{ $chaind->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/chainds/{{ $chaind->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/chainds/{{ $chaind->slug }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="badge bg-danger border-0" onclick="return confirm('are you sure?')"><span data-feather="x-circle"></button>
                    </form>
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection