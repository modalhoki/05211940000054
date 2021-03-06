@extends('github.github')

@section('konten')

<table class="table">
    <thead class="thead-light">
      <tr>
        <th>Nama Pegawai</th>
        <th>Jabatan</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Tanggal</th>
        <th>Nama Tugas</th>
        <th>Status</th>
        <th>Ubah</th>
      </tr>
    </thead>

    <tbody>
    @foreach($varrelation as $t)
    <tr>
    <td>{{ $t->pegawai->pegawai_nama }}</td>
    <td>{{ $t->pegawai->pegawai_jabatan }}</td>
    <td>{{ $t->pegawai->pegawai_umur }}</td>
    <td>{{ $t->pegawai->pegawai_alamat }}</td>
		<td>{{ $t->Tanggal }}</td>
		<td>{{ $t->NamaTugas }}</td>
		<td>{{ $t->Status }}</td>
		<td>
      <a href="read/{{ $t->IDPegawai }}">Detail</a>
			|
			<a href="edit/{{ $t->ID }}">Edit</a>
			|
			<a href="hapus/{{ $t->ID }}">Hapus</a>
		</td>
	</tr>
	@endforeach
    </tbody>
</table>

<div class="container">
	Halaman : {{ $varrelation->currentPage() }} <br/>
	Jumlah Data : {{ $varrelation->total() }} <br/>
	Data Per Halaman : {{ $varrelation->perPage() }} <br/>
 
 
	{!! $varrelation->links('pagination::bootstrap-4') !!}
</div>

  @endsection