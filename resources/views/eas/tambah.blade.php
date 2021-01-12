@extends('eas.eas')

@section('konten')

<form action="add" class="was-validated" method="post">
    {{ csrf_field() }}
  <div class="form-group pt-3">
    <label for="uname">NRP</label>
    <input type="text" class="form-control" id="nrp" placeholder="e.g. : 000054" name="nrp" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <div class="form-group">
    <label for="uname">Nama</label>
    <input type="text" class="form-control" id="name" placeholder="e.g. : Ariasatya Mahatma" name="nama" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <div class="form-group">
    <label for="uname">Jurusan</label>
    <input type="text" class="form-control" id="majors" placeholder="SI" name="jurusan" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <div class="form-group">
    <label for="uname">IPK</label>
    <input type="text" class="form-control" id="grade" placeholder="4.00" name="ipk" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection