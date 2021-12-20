@extends('layout.backend.app',[
    'title' => 'List Admin',
    'pageTitle' => 'Admin'
])
@section('content')

        <!-- Profil Instansi -->
        <div class="col-xl col-lg">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Profil Instansi</h6>
                </div>
                    <!-- Card Body -->
                <div class="card-body text-center">
                <img src="{{ asset ('logo_garut.png') }}" width="250px" height="250px"> 
                <h1>DINAS KOMUNIKASI DAN INFORMATIKA</h1>
                <p>
                    Jl. Pramuka No.6, Pakuwon, Kec. Garut Kota, Kabupaten Garut
                    Jawa Barat 44117 Telp: (021) 382-3253
                    
                    diskominfo@garutkab.go.id</p>
                    <a href="https://diskominfo.garutkab.go.id/">Diskominfo Garut</a>
                    </div>
            </div>
        </div>

@stop