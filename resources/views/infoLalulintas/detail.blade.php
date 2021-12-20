@extends('layout.backend.app',[
    'title' => 'List Info Lalulintas',
    'pageTitle' => 'INFO LALULINTAS'
])
@section('content')

<!--tabel -->
<div>
    <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal" >Tambah Info Lalulintas</button>
    <table class="table table-bordered bg-light mt-5">
        <tr style="background-color: #0D6EFD; color:white;">
            <th>Keterangan</th>
            <th>Jam</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr> 
        
        @forelse($info as $data)
        <tr>
            <td>
              @if($data->keterangan == 1)
                <div class="badge badge-danger">MACET</div>
              @elseif ($data->keterangan == 2)
              <div class="badge badge-warning">PADAT</div>
              @else ($data->keterangan == 3)
              <div class="badge badge-primary">LANCAR</div>
              @endif
            </td>
            <td>{{ $data->jam }}</td>
            <td>{{ $data->tanggal }}</td>
            <td class="text-center">                    
            <form action="{{ route('info_lalulintas.destroy', $data->id) }}" method="post" class="inline">
                    {!! method_field('delete') . csrf_field() !!}
                    <button type="submit" class="btn btn-danger mt-3">Delete</button>
                </form>
            </td>
        </tr>

        @empty
        <tr>
            <td colspan="4">Belum terdapat data info lalulintas</td>
        </tr>
        @endforelse
    </table>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Info Lalulintas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('info_lalulintas.store') }}" method="post">
        @csrf
            <div class="form-group">
                <label for="">Keterangan</label>
                <select name="keterangan" id="" class="form-control" >
                    <option value="">--Pilih Keterangan--</option>
                    <option value="1">MACET</option>
                    <option value="2">PADAT</option>
                    <option value="3">LANCAR</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Jam</label>
                <input type="text" name="jam"  placeholder="input jam" class="form-control timepicker">
            </div>
            <div class="form-group">
                <label for="">Tanggal</label>
                <input type="date"  name="tanggal"  class="form-control">
            </div>
            <input type="hidden" value="{{$id}}" name="cctv_id" >
            <button class="btn-primary btn" type="submit" >Tambah</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>



@stop