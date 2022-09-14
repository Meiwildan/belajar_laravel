@extends('layout.v_template')
@section('title', 'Guru')
    

@section('content')
<a href="/guru/add" class="btn btn-primary btn-sm">Tambah Guru</a> 
<br>
@if (session('pesan'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times</button>
    <h4><i class="icon fa fa-check"></i>Success</h4>
    {{ session('pesan') }}.
</div>
    
@endif
   <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nip</th>
                <th>Nama Guru</th>
                <th>Mata Pelajaran</th>
                <th>Foto Guru</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1;?>
            @foreach ($guru as $datafarrel)
            <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $datafarrel->nip }}</td>
            <td>{{ $datafarrel->nama_guru }}</td>
            <td>{{ $datafarrel->mapel }}</td>
            <td><img src="{{ url('foto_guru/' . $datafarrel->foto_guru) }}" width="125px"></td>
            <td>
                <a href="/guru/detail/{{ $datafarrel->id_guru }}" class="btn btn-sm btn-success">Detail</a>
                <a href="/guru/edit/{{ $datafarrel->id_guru }}" class="btn btn-sm btn-primary">Edit</a>
                <button type="button button-sm" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $datafarrel->id_guru }}">
                    Delete
                  </button>
            </td>
        </tr>
            @endforeach
        
        </tbody>
   </table>

   @foreach ($guru as $datafarrel)
   <div class="modal modal-danger fade" id="delete{{ $datafarrel->id_guru }}">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">{{ $datafarrel->nama_guru }}</h4>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin ingin menghapus data ini?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
          <a href="/guru/delete/{{ $datafarrel->id_guru }}" class="btn btn-outline">Yes</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
   @endforeach

   
   
@endsection