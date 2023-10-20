@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new chaind</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/chainds" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-select" name="type">
                <option value="Mainnet" selected>Mainnet</option>
                <option value="Testnet">Testnet</option>
            </select>
        </div>
        <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
        @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="logo" class="form-label">Logo</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('logo') is-invalid @enderror" type="file" id="logo" name="logo" onchange="previewImage()">
            @error('logo')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="guide_link" class="form-label">guide_link File</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('guide_link') is-invalid @enderror" type="file" id="guide_link" name="guide_link">
            @error('guide_link')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="rpc_link" class="form-label">RPC Link</label>
            <input type="text" class="form-control @error('rpc_link') is-invalid @enderror" id="rpc_link" name="rpc_link" required autofocus value="{{ old('rpc_link') }}">
            @error('rpc_link')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="stake_link" class="form-label">Stake Link</label>
            <input type="text" class="form-control @error('stake_link') is-invalid @enderror" id="stake_link" name="stake_link" required autofocus value="{{ old('stake_link') }}">
            @error('stake_link')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        

        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>

<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function() {
        fetch('/dashboard/chainds/checkSlug?name=' + name.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    })

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]); // Perbaikan typo di sini

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection