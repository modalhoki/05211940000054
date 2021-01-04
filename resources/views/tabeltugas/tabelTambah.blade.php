@extends('tabeltugas.tabel')

@section('konten')

<form action="add" class="was-validated" method="post">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="uname">IDPegawai</label>
    <input type="text" class="form-control" id="idemployee" placeholder="e.g. : 1xx" name="id" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="uname">Tanggal</label>
    <input type="datetime-local" class="form-control" id="assignmentdate" placeholder="e.g. : 2020-07-07" name="date" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <div class="form-group">
    <label for="uname">Nama Tugas</label>
    <input type="text" class="form-control" id="assignmentname" placeholder="e.g. : Buat Laporan" name="assignment" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <div class="form-group">
    <label for="uname">Status</label>
    <input type="text" class="form-control" id="status" placeholder="O/D/L" name="status" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection