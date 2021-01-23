@extends('dwiki.template')

@section('konten')

<form action="add" class="was-validated" method="post">
    {{ csrf_field() }}
  <div class="form-group pt-3">
    <label for="uname">NRP</label>
    <input type="text" class="form-control" id="brand" placeholder="e.g. : 05211940000054" name="nom" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <div class="form-group">
    <label for="uname">Nama</label>
    <input type="text" class="form-control" id="stock" placeholder="e.g. : Dwiki Cahyo" name="jeneng" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>  
  <label for="uname">Jurusan</label>
    <select class="form-control" id="jabatan" name="jabatan" required="required">
    @foreach ($jurusan as $j)
      <option>{{ $j -> jurusan }}</option>
    @endforeach
    </select>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection