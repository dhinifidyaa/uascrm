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

<div class="card shadow mb-4">
    <div class="card-body">
        <form method="POST" action="{{ url('admin/pelanggan/store') }}">
            @csrf
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control @error('nama') is-invalid @enderror">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-4 col-form-label">Alamat</label> 
                <div class="col-8">
                    <input id="alamat" name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror">
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="no_tlp" class="col-4 col-form-label">No Telepon</label> 
                <div class="col-8">
                    <input id="no_tlp" name="no_tlp" type="text" class="form-control @error('no_tlp') is-invalid @enderror">
                    @error('no_tlp')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="user_id" class="col-4 col-form-label">User ID</label> 
                <div class="col-8">
                    <select id="user_id" name="user_id" class="custom-select @error('user_id') is-invalid @enderror">
                        @foreach ($user as $user_id)
                            <option value="{{ $user_id->id }}">{{ $user_id->nama}}</option>
                        @endforeach
                    </select>
                    @error('user')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="pelanggan_id" class="col-4 col-form-label">Diskon ID</label> 
                <div class="col-8">
                    <select name="diskon_id" id="" class="form-control">
                        <option value="">Pilih Diskon</option>
                        @foreach ($diskon as $p)
                        <option value="{{$p->id}}">{{$p->deskripsi}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection