@extends('baju.baju')

@section('konten')

@foreach($vartabel as $t)
<form action="update" class="was-validated" method="post">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="uname">Kode Baju</label>
    <input type="number" class="form-control" id="code" value="{{ $t->kodebaju }}" name="kode" readonly>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="uname">Merk Baju</label>
    <input type="text" class="form-control" id="brand" value="{{ $t->merkbaju }}" name="merk" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <div class="form-group">
    <label for="uname">Stock Baju</label>
    <input type="text" class="form-control" id="stocks" value="{{ $t->stockbaju }}" name="stock" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <div class="form-group">
    <label for="uname">Tersedia</label>
    <input type="text" class="form-control" id="status" value="{{ $t->tersedia }}" name="tersedia" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach

@endsection