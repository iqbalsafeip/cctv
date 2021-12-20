@extends('layout.backend.app',[
    'title' => 'Dashboard',
    'pageTitle' => 'Dashboard'
])
@section('content')

        <div class="container-fluid">

            <!-- Page Heading -->

            <div class="row">

                <!-- Dashboard -->
                @foreach ($cctv as $data)
                <div class="col-xl-6 col-lg-6">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">{{ $data->nama_cctv }}</h6>
                            <a href="{{ $data->lokasi }}"><h6 class="m-0 font-weight-bold text-primary">Google Maps</h6></a>
                        </div>
                         <!-- Card Body -->
                        <div class="card-body">
                                <iframe width="500" height="360" src="{{ $data->link }}"></iframe>
                        </div>
                    </div>
                </div>
                @endforeach
    

                {{-- <!-- Pie Chart -->
                <div class="col-xl-6 col-lg-6">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Peta</h6>
                            <div class="dropdown no-arrow">
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1256.2707285310682!2d107.90403082923271!3d-7.215823669191078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMTInNTcuMCJTIDEwN8KwNTQnMTYuNSJF!5e1!3m2!1sid!2sid!4v1628688805562!5m2!1sid!2sid" width="760" height="560" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div> --}}

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