@extends('layout.backend.app',[
    'title' => 'List CCTV',
    'pageTitle' => 'CCTV'
])
@section('content')

<!--tabel -->
    <table class="table table-bordered bg-light">
        <tr style="background-color: #0D6EFD; color:white;">
            <th>Nama CCTV</th>
            <th>Aksi</th>
        </tr> 
        
        @forelse($cctv as $data)
        <tr>
            <td>{{ $data->nama_cctv }}</td>
            <td class="text-center">                    
                <a href="{{ route('info-detail', $data->id)  }}" type="button" class="btn btn-primary">Lihat Info Lalulintas</a>
            </td>
        </tr>

        @empty
        <h1>Silahkan tambahkan data CCTV terlebih dahulu</h1>
        @endforelse
    </table>

@stop