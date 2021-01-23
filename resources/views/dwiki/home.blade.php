@extends('dwiki.template')

@section('konten')

<table class="table">
    <thead class="thead-light">
      <tr>
        <th>NRP</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Ubah</th>
      </tr>
    </thead>

    <tbody>
    @foreach($vartabel as $t)
    <tr>
		<td>{{ $t->nrp }}</td>
		<td>{{ $t->nama }}</td>
		<td>{{ $t->jurusan }}</td>
		<td>
			<a href="dwiki/edit/{{ $t->id }}">Edit</a>
			|
			<a href="dwiki/hapus/{{ $t->id }}">Hapus</a>
		</td>
	</tr>
	@endforeach
    </tbody>
</table>

<div class="container">
	Halaman : {{ $vartabel->currentPage() }} <br/>
	Jumlah Data : {{ $vartabel->total() }} <br/>
	Data Per Halaman : {{ $vartabel->perPage() }} <br/>
 
 
	{!! $vartabel->links('pagination::bootstrap-4') !!}
  </div>

  @endsection