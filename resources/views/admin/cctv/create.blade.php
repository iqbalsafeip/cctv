
@extends('layout.backend.app',[
    'title' => 'Tambah CCTV',
    'pageTitle' => 'Tambah CCTV'
])
@section('content')

<!--tabel -->
    <form action="{{ route('cctv.store') }}" method="post">
        @csrf
        <div class="col-4 mb-3">
            <label for="" class="form-label">Nama CCTV</label>
            <input type="text" class="form-control" name="nama_cctv">
        </div>
        <div class="col-4 mb-3">
            <label for="" class="form-label">Link Google Maps</label>
            <input type="text" class="form-control" name="lokasi">
        </div>
        <div class="col-4 mb-3">
            <label for="" class="form-label">Link</label>
            <input type="text" class="form-control" name="link">
        </div>
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@stop