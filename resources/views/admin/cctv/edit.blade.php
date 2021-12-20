
@extends('layout.backend.app',[
    'title' => 'Edit CCTV',
    'pageTitle' => 'Edit CCTV'
])
@section('content')

<!--tabel -->
<h1>EDIT CCTV</h1>
    <form action="{{ route('cctv.update', $cctv->id) }}" method="post">
        @csrf
        @method('put')
        <div class="col-4 mb-3">
            <label for="" class="form-label">Nama CCTV</label>
            <input type="text" class="form-control" name="nama_cctv" value="{{ old('nama_cctv') ?? $cctv->nama_cctv }}">
        </div>
        <div class="col-4 mb-3">
            <label for="" class="form-label">Google Maps</label>
            <input type="text" class="form-control" name="lokasi" value="{{ old('lokasi') ?? $cctv->lokasi }}">
        </div>
        <div class="col-4 mb-3">
            <label for="" class="form-label">Link</label>
            <input type="text" class="form-control" name="link" value="{{ old('link') ?? $cctv->link }}">
        </div>
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@stop