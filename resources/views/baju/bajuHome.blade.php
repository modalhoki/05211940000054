@extends('baju.baju')

@section('konten')

<table class="table">
    <thead class="thead-light">
      <tr>
        <th>Kode Baju</th>
        <th>Merk Baju</th>
        <th>Stock Baju</th>
        <th>Tersedia</th>
        <th>Ubah</th>
      </tr>
    </thead>

    <tbody>
    @foreach($vartabel as $t)
    <tr>
		<td>{{ $t->kodebaju }}</td>
		<td>{{ $t->merkbaju }}</td>
		<td>{{ $t->stockbaju }}</td>
		<td>{{ $t->tersedia }}</td>
		<td>
			<a href="baju/edit/{{ $t->kodebaju }}">Edit</a>
			|
			<a href="baju/hapus/{{ $t->kodebaju }}">Hapus</a>
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