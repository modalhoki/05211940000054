@extends('eas.eas')

@section('konten')

<table class="table">
    <thead class="thead-light">
      <tr>
        <th>NRP</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>IPK</th>
        <th>Hapus</th>
      </tr>
    </thead>

    <tbody>
    @foreach($vartabel as $t)
    <tr>
		<td>{{ $t->NRP }}</td>
		<td>{{ $t->Nama }}</td>
		<td>{{ $t->Jurusan }}</td>
		<td>{{ $t->IPK }}</td>
		<td>
			<a href="eas/hapus/{{ $t->NRP }}">Hapus</a>
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