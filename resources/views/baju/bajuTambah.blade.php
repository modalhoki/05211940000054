@extends('baju.baju')

@section('konten')

<form action="add" class="was-validated" method="post">
    {{ csrf_field() }}
  <div class="form-group pt-3">
    <label for="uname">Merk Baju</label>
    <input type="text" class="form-control" id="brand" placeholder="e.g. : Giordano" name="merk" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <div class="form-group">
    <label for="uname">Stock Baju</label>
    <input type="number" class="form-control" id="stock" placeholder="e.g. : 30" name="stock" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <div class="form-group">
    <label for="uname">Tersedia</label>
    <input type="text" class="form-control" id="status" placeholder="Y/N" name="tersedia" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection