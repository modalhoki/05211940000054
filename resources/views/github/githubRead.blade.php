@extends('github.github')

@section('konten')

@foreach($pegawai as $p)

<div class="row p-3">
    <div class="col-6">
        <h3>Nama</h3>
        <p>{{$p -> pegawai_nama}}</p>
        <h3>Jabatan</h3>
        <p>{{$p -> pegawai_jabatan}}</p>
    </div>
    <div class="col-6">
        <h3>Umur</h3>
        <p>{{$p -> pegawai_umur}}</p>
        <h3>Alamat</h3>
        <p>{{$p -> pegawai_alamat}}</p>
    </div>
</div>

<table class="table">
    <thead class="thead-light">
      <tr>
        <th>Tanggal</th>
        <th>Nama Tugas</th>
        <th>Status</th>
      </tr>
    </thead>
    @foreach($tugas as $t)
    <tbody>
    <tr>
		<td>{{ $t->Tanggal }}</td>
		<td>{{ $t->NamaTugas }}</td>
		<td>{{ $t->Status }}</td>
	</tr>
    </tbody>
    @endforeach
</table>
{!! $tugas->links('pagination::bootstrap-4') !!}

@endforeach

@endsection