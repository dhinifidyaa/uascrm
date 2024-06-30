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
@foreach($pemesanan as $p)
<form method="POST" action="{{url('admin/pemesanan/update/'.$p->id)}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Waktu Pemesanan</label>
        <div class="col-8">
            <input id="text" name="waktu_pemesanan" value="{{$p->waktu_pemesanan}}" type="date" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Status</label>
        <div class="col-8">
            <input id="text1" name="status" value="{{$p->status}}" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Harga Akhir</label>
        <div class="col-8">
            <input id="text2" name="harga_akhir" value="{{$p->harga_akhir}}" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="pelanggan_id" class="col-4 col-form-label">Layanan ID</label>
        <div class="col-8">
            <select name="layanan_id" id="" class="form-control">
                <option value="">Pilih Layanan</option>
                @foreach ($layanan as $p)
                <option value="{{$p->id}}">{{$p->nama}}</option>
                @endforeach
            </select>
        </div>
    </div>
        <div class="form-group row">
            <label for="pelanggan_id" class="col-4 col-form-label">Pelanggan ID</label>
            <div class="col-8">
                <select name="pelanggan_id" id="" class="form-control">
                    <option value="">Pilih Pelanggan</option>
                    @foreach ($pelanggan as $p)
                    <option value="{{$p->id}}">{{$p->nama}}</option>
                    @endforeach
                </select>
            </div>
        </div>
            <div class="form-group row">
                <label for="pelanggan_id" class="col-4 col-form-label">Penyedia ID</label>
                <div class="col-8">
                    <select name="penyedia_id" id="" class="form-control">
                        <option value="">Pilih Penyedia</option>
                        @foreach ($penyedia as $p)
                        <option value="{{$p->id}}">{{$p->nama}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <a href="{{url('admin/pemesanan/index/')}}" class="btn btn-secondary">Close</a>
                    <button name="submit" type="submit" class="btn btn-warning">Update</button>
                </div>
            </div>
</form>
@endforeach
@endsection