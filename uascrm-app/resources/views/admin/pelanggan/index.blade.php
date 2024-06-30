@extends('admin.layout.appadmin')
@section('content')

<h1 class="h3 mb-2 text-gray-800">Tabel Pemesanan</h1><br>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <a href="{{url('admin/pelanggan/create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
        <!-- <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tambahDataModal"><i
                class="fas fa-plus"></i></a>
        <a href="{{url('admin/anggota/anggotaPDF')}}" class="btn btn-danger"><i class="fas fa-file-pdf"></i></a> -->
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>User ID</th>
                        <th>Diskon ID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>User ID</th>
                        <th>Diskon ID</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $no = 1 @endphp
                    @foreach ($pelanggan as $p)


                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$p->nama}}</td>
                        <td>{{$p->alamat}}</td>
                        <td>{{$p->no_tlp}}</td>
                        <td>{{$p->user->nama}}</td>
                        <td>{{$p->diskon->deskripsi}}</td>
                        <td>
                        <a href="{{url('admin/pelanggan/edit/'.$p->id)}}" class="btn btn-sm btn-warning"><i
                        class="fas fa-edit"></i></a>
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                data-target="#exampleModal{{$p->id}}">
                                <i class="fas fa-trash"></i>
                            </button>


                            <div class="modal fade" id="exampleModal{{$p->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda yakin akan menghapus data {{$p->id}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success"
                                                data-dismiss="modal">Close</button>
                                            <a href="{{url('admin/pelanggan/delete/'.$p->id)}}"
                                                class="btn btn-danger" data-confirm-delete="true">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>







@endsection