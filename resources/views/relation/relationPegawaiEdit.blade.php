@extends('relation.relation')

@section('konten')

@foreach($varpegawai as $t)
<form action="update" class="was-validated" method="post">
    {{ csrf_field() }}
  <div class="form-group mt-3">
    <label for="uname">ID Pegawai</label>
    <input type="number" class="form-control" id="id" value="{{ $t->pegawai_id }}" name="id" readonly>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div> 
  <div class="form-group mt-3">
    <label for="uname">Nama</label>
    <input type="text" class="form-control" id="name" value="{{ $t->pegawai_nama }}" name="nama" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <div class="form-group">
  <label for="uname">Jabatan</label>
    <select class="form-control" id="jabatan" name="jabatan" required="required">
    @foreach($jabatan as $j)
      <option value="{{ $j -> jabatan }}"@if($t->pegawai_jabatan == $j->jabatan) selected="selected" @endif>{{ $j -> jabatan }}</option>
    @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="uname">Umur</label>
    <input type="number" class="form-control" id="age" value="{{ $t->pegawai_umur }}" name="umur" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <div class="form-group">
    <label for="uname">Alamat</label>
    <input type="text" class="form-control" id="address" value="{{ $t->pegawai_alamat }}" name="alamat" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach

@endsection