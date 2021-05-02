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

<form action="{{ route('user.update', $user->id) }}" method="POST">
    @csrf
    @method('put')
<div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" value="{{ $user->email }}" readonly>
  </div>

  <div class="form-group">
    <label>Tipe Jabatan</label>
    <select name="tipe" class="form-control">
    <option value="" holder>Pilih Jabatan</option>
    <option value="t" holder
    @if ($user->tipe == 1)
    selected    
    @endif
    >Administrator</option>
    <option value="f"
    @if ($user->tipe == 0)
        selected    
        @endif
        >User</option>
    </select>
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password">
  </div>

  <div class="form-group">
      <button class="btn btn-primary btn-block">Update Jabatan</button>
  </div>
</form>
@endsection