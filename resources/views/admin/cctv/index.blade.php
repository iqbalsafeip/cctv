@extends('layout.backend.app',[
    'title' => 'List CCTV',
    'pageTitle' => 'CCTV'
])
@section('content')

<!--tabel -->
    <table class="table table-bordered bg-light">
        <tr style="background-color: #0D6EFD; color:white;">
            <th>Nama CCTV</th>
            <th>Google Maps</th>
            <th>Link</th>
            <th>Aksi</th>
        </tr> 
        
        @forelse($cctv as $data)
        <tr>
            <td>{{ $data->nama_cctv }}</td>
            <td><a href="{{ $data->lokasi }}">Lihat</a></td>
            <td>{{ $data->link }}</td>
            <td class="text-center">                    
                <a href="{{ route('cctv.show', $data->id)  }}" type="button" class="btn btn-primary">Lihat CCTV</a>
                |
                <a href="{{ route('cctv.edit', $data->id)  }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('cctv.destroy', $data->id) }}" method="post" class="inline">
                    {!! method_field('delete') . csrf_field() !!}
                    <button type="submit" class="btn btn-danger mt-3">Delete</button>
                </form>
            </td>
        </tr>

        @empty
        <h1>Silahkan tambahkan data CCTV terlebih dahulu</h1>
        @endforelse
    </table>

@stop