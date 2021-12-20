@extends('layout.backend.app',[
    'title' => 'List Admin',
    'pageTitle' => 'Admin'
])
@section('content')

<!--tabel -->
    <table class="table table-bordered bg-light">
        <tr style="background-color: #0D6EFD; color:white;">
            <th>Nama Admin</th>
            <th>Email</th>
            {{-- <th>Role</th> --}}
            <th>Aksi</th>
        </tr> 
        
        @forelse($admin as $data)
        <tr>
            {{-- <td>{{ $data->id }}</th> --}}
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            {{-- <td>{{ $data->Role }}</td> --}}
            <td class="text-center">                    
                <a href="{{ route('admin.edit', $data->id)  }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('admin.destroy', $data->id) }}" method="post" class="inline">
                    {!! method_field('delete') . csrf_field() !!}
                    <button type="submit" class="btn btn-danger mt-3">Delete</button>
                </form>
            </td>
        </tr>

        @empty
        <h1>Error</h1>
        @endforelse
    </table>

@stop