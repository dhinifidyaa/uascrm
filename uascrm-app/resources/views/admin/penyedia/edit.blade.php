@extends('admin.layout.appadmin')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
@foreach($penyedia as $p)
<form method="POST" action="{{url('admin/penyedia/update/'.$p->id)}}" enctype="multipart/form-data">
    @csrf
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama Penyedia</label> 
    <div class="col-8">
      <input id="text" name="nama" value="{{$p->nama}}" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Aalamat</label> 
    <div class="col-8">
      <input id="text1" name="alamat" value="{{$p->alamat}}" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <input id="text2" name="deskripsi" value="{{$p->deskripsi}}" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
    <a href="{{url('admin/penyedia/index/')}}" class="btn btn-secondary">Close</a>
      <button name="submit" type="submit" class="btn btn-warning">Update</button>
    </div>
  </div>
</form>
@endforeach
@endsection 