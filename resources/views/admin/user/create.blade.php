@extends('template_backend.home')
@section('sub-judul','Create Tag')
@section('content')

@if (count($errors)>0)
@foreach ($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach   
@endif

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}  
</div>
@endif

<form action="{{ route('user.store') }}" method="POST">
    @csrf
<div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="name">
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email">
  </div>

  <div class="form-group">
    <label>Tipe Jabatan</label>
    <select name="tipe" class="form-control">
    <option value="">Pilih Jabatan</option>
    <option value="t">Administrator</option>
    <option value="f">User</option>
    </select>
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password">
  </div>

  <div class="form-group">
      <button class="btn btn-primary btn-block">Simpan Jabatan</button>
  </div>
</form>
@endsection