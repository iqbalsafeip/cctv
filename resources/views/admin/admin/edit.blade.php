
@extends('layout.backend.app',[
    'title' => 'Tambah Admin',
    'pageTitle' => 'Tambah Admin'
])
@section('content')

<!--tabel -->
    <form action="{{ route('admin.update', $admin->id) }}" method="post">
        @csrf
        @method('put')
        <div class="col-4 mb-3">
            <label for="" class="form-label">Nama Admin</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') ?? $admin->name }}">
        </div>
        <div class="col-4 mb-3">
            <label for="" class="form-label">Email Admin</label>
            <input type="email" class="form-control" name="email" value="{{ old('name') ?? $admin->email }}">
        </div>
        <div class="col-4 mb-3">
            <label for="" class="form-label">Role</label>
            <select name="role" class="form-control">
                {{-- <option value="superadmin">superadmin</option> --}}
                <option value="admin">admin</option>
            </select>
        </div>
        <div class="col-4 mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="col-4 mb-3">
            <label for="" class="form-label">Password Confirmation</label>
            <input type="password" class="form-control" name="password_confirmation">
        </div>
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@stop