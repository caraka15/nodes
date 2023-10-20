@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-5">
        <div class="col-md-8">
            <h1 class="mb-3 mt-5">{{ $chaind->name }}</h1>

            <a href="/dashboard/chainds" class="btn btn-success"><span data-feather="arrow-left"></span>Back to all my chainds</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span>Edit chaind</a>
            <form action="/dashboard/chainds/{{ $chaind->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger " onclick="return confirm('are you sure?')"><span data-feather="x-circle"></span>Delete</button>
            </form>

            <img src="{{ asset('storage/' . $chaind->logo) }}" alt="{{ $chaind->name }}" class="img-fluid mt-3">
        </div>
    </div>
</div>
@endsection