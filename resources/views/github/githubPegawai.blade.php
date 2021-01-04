@extends('github.github')

@section('konten')

<table class="table">
    <thead class="thead-light">
      <tr>
        <th>Nama Pegawai</th>
        <th>Jabatan</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Ubah</th>
      </tr>
    </thead>

    <tbody>
    @foreach($pegawai as $t)
    <tr>
    <td>{{ $t->pegawai_nama }}</td>
    <td>{{ $t->pegawai_jabatan }}</td>
    <td>{{ $t->pegawai_umur }}</td>
    <td>{{ $t->pegawai_alamat }}</td>
		<td>
			<a href="pegawai/edit/{{ $t->pegawai_id }}">Edit</a>
			|
			<a href="pegawai/hapus/{{ $t->pegawai_id }}">Hapus</a>
		</td>
	</tr>
	@endforeach
    </tbody>
</table>

<div>
	Halaman : {{ $pegawai->currentPage() }} <br/>
	Jumlah Data : {{ $pegawai->total() }} <br/>
	Data Per Halaman : {{ $pegawai->perPage() }} <br/>
 
 
	{!! $pegawai->links('pagination::bootstrap-4') !!}
  </div>


  @endsection