@extends('tabeltugas.tabel')

@section('konten')

<table class="table">
    <thead class="thead-light">
      <tr>
        <th>IDPegawai</th>
        <th>Tanggal</th>
        <th>Nama Tugas</th>
        <th>Status</th>
        <th>Ubah</th>
      </tr>
    </thead>

    <tbody>
    @foreach($vartabel as $t)
    <tr>
		<td>{{ $t->IDPegawai }}</td>
		<td>{{ $t->Tanggal }}</td>
		<td>{{ $t->NamaTugas }}</td>
		<td>{{ $t->Status }}</td>
		<td>
			<a href="tabel/edit/{{ $t->IDPegawai }}">Edit</a>
			|
			<a href="tabel/hapus/{{ $t->IDPegawai }}">Hapus</a>
		</td>
	</tr>
	@endforeach
    </tbody>
</table>

<div class="container">
	Halaman : {{ $vartabel->currentPage() }} <br/>
	Jumlah Data : {{ $vartabel->total() }} <br/>
	Data Per Halaman : {{ $vartabel->perPage() }} <br/>
 
 
	{{ $vartabel->links() }}
  </div>

  @endsection