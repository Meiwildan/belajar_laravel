@extends('layout.v_template')
@section('title', 'Siswa')
@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Mata Pelajaran</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1;?>
        @foreach ($siswa as $datafarrel)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $datafarrel->nis }}</td>
                <td>{{ $datafarrel->nama_siswa }}</td>
                <td>{{ $datafarrel->kelas }}</td>
                <td>{{ $datafarrel->mapel }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
@endsection