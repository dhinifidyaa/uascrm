@extends('admin.layout.appadmin')
@section('content')

<h1 class="h3 mb-2 text-gray-800">Tabel Diskon</h1><br>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tambahDataModal"><i class="fas fa-plus"></i></a>
                            <a href="{{url('admin/anggota/anggotaPDF')}}" class="btn btn-danger"><i class="fas fa-file-pdf"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Diskon</th>
                                            <th>Deskripsi</th>
                                            <th>Diskon</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                            <th>Kode Diskon</th>
                                            <th>Deskripsi</th>
                                            <th>Diskon</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @php $no = 1 @endphp
                                    @foreach ($diskon as $d)
                                   
                                    
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$d->kode_diskon}}</td>
                                            <td>{{$d->deskripsi}}</td>
                                            <td>{{$d->persentase_diskon}}</td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    
                    <div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <form action="{{url('admin/anggota/store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Anggota</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama :</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="recipient-name" >
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Alamat :</label>
                                    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="recipient-name" >
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nomor Telepon :</label>
                                    <input type="text" name="no_tlp" class="form-control @error('no_tlp') is-invalid @enderror" id="recipient-name" >
                                    @error('no_tlp')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Tanggal Bergabung :</label>
                                    <input type="date" name="tgl_bergabung" class="form-control @error('tgl_bergabung') is-invalid @enderror" id="recipient-name"  >
                                    @error('tgl_bergabung')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Email :</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="recipient-name" >
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Password :</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="recipient-name" >
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Foto :</label>
                                    <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" id="recipient-name" >
                                    @error('foto')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    
                    



@endsection