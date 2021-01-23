@extends('dwiki.template')

@section('konten')

@foreach($vartabel as $t)
<form action="update" class="was-validated" method="post">
    {{ csrf_field() }}
  <input type="hidden" name="id" value="{{ $t->id }}"> <br/>
  <div class="form-group">
    <label for="uname">NRP</label>
    <input type="number" class="form-control" id="code" value="{{ $t->nrp }}" name="nrp" readonly>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="uname">Nama</label>
    <input type="text" class="form-control" id="brand" value="{{ $t->nama }}" name="nama" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <div class="form-group">
    <label for="uname">Jurusan</label>
    <input type="text" class="form-control" id="stocks" value="{{ $t->jurusan }}" name="jurusan" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach

@endsection