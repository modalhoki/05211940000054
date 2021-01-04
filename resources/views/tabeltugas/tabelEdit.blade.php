@extends('tabeltugas.tabel')

@section('konten')

@foreach($vartabel as $t)
<form action="update" class="was-validated" method="post">
  <?php
    $tanggal = date("c", strtotime($t->Tanggal));
    list($date) = explode('+', $tanggal);
    $tanggal = $date;
  ?>
    {{ csrf_field() }}
  <div class="form-group">
    <label for="uname">IDPegawai</label>
    <input type="text" class="form-control" id="idemployee" value="{{ $t->IDPegawai }}" name="id" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="uname">Tanggal</label>
    <input type="datetime-local" class="form-control" id="assignmentdate" value="{{ $tanggal }}" name="date" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <div class="form-group">
    <label for="uname">Nama Tugas</label>
    <input type="text" class="form-control" id="assignmentname" value="{{ $t->NamaTugas }}" name="assignment" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <div class="form-group">
    <label for="uname">Status</label>
    <input type="text" class="form-control" id="status" value="{{ $t->Status }}" name="status" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach

@endsection