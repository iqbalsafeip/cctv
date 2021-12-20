@extends('layout.backend.app',[
    'title' => 'Dashboard',
    'pageTitle' => 'Dashboard'
])
@section('content')

        <div class="container-fluid">

            <!-- Page Heading -->

            <div class="row">

                <!-- Area Chart -->
                <div class="col-xl-6 col-lg-6">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">{{ $cctv->nama_cctv }}</h6>
                            <a href="{{ $cctv->lokasi }}"><h6 class="m-0 font-weight-bold text-primary">Google Maps</h6></a>
                            
                        </div>
                         <!-- Card Body -->
                        <div class="card-body">
                                <iframe width="660" height="560" src="{{ $cctv->link }}"></iframe>
                         </div>
                    </div>
                </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Content Column -->
                    <!-- Color System -->
                    

                    <!-- Illustrations -->

                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
@stop