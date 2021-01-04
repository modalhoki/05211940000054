@extends('relation.relation')

@section('konten')

<form action="store" class="was-validated" method="post">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="uname">Nama</label>
    <input type="text" class="form-control" id="idemployee" placeholder="e.g. : Tejo" name="nama" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
  <label for="uname">Jabatan</label>
    <select class="form-control" id="jabatan" name="jabatan" required="required">
    @foreach ($jabatan as $j)
      <option>{{ $j -> jabatan }}</option>
    @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="uname">Umur</label>
    <input type="text" class="form-control" id="age" placeholder="e.g. : 30" name="umur" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <div class="form-group">
    <label for="uname">Alamat</label>
    <input type="text" class="form-control" id="address" placeholder="e.g. : Jl. Jaksa 27" name="alamat" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection