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
        <form method="POST" action="{{ url('admin/pemesanan/store') }}">
            @csrf
            <div class="form-group row">
                <label for="waktu_pemesanan" class="col-4 col-form-label">Waktu Pemesanan</label> 
                <div class="col-8">
                    <input id="waktu_pemesanan" name="waktu_pemesanan" type="date" class="form-control @error('waktu_pemesanan') is-invalid @enderror">
                    @error('waktu_pemesanan')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="harga_akhir" class="col-4 col-form-label">Harga Akhir</label> 
                <div class="col-8">
                    <input id="harga_akhir" name="harga_akhir" type="text" class="form-control @error('harga_akhir') is-invalid @enderror">
                    @error('harga_akhir')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="layanan_id" class="col-4 col-form-label">Layanan</label> 
                <div class="col-8">
                    <select id="layanan_id" name="layanan_id" class="custom-select @error('layanan_id') is-invalid @enderror">
                        @foreach ($layanan as $layanan)
                            <option value="{{ $layanan->id }}">{{ $layanan->nama }}</option>
                        @endforeach
                    </select>
                    @error('layanan_id')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="pelanggan_id" class="col-4 col-form-label">Pelanggan</label> 
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
                <label for="penyedia_id" class="col-4 col-form-label">Penyedia ID</label> 
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
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
