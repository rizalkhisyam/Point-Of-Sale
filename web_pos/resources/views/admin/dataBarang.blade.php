@extends('admin/index')
@section('container')
<div id="content">
    <br><br>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tabel Data Barang</h1>
        <p class="mb-4">Data Barang.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tambahData">Tambah Data
                    Barang</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Kode</th>
                                <th>Stock</th>
                                <th>Foto Barang</th>
                                <th>Status</th>
                                
                            </tr>
                        </thead>
                        @foreach($tampil as $data)
                        <tbody>

                            <tr>
                                <td>{{$data->nama_barang}}</td>
                                <td>{{$data->harga}}</td>
                                <td>{{$data->kode}}</td>
                                <td>{{$data->stok}}</td>
                                <td><img src="{{asset('image/fotoBarang/'.$data->fotoBarang)}}" alt="otong" class="img-responsive" width="50px"></td>
                                <td>
                                    <a href="#updateData{{$data->id}}"><button type="button" class="btn btn-info"
                                            data-toggle="modal"
                                            data-target="#updateData{{$data->id}}">Update</button></a>
                                    <button type="button" class="btn btn-info" data-toggle="modal"
                                        data-target="#hapusData{{$data->id}}">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                        <!-- Modal untuk Update -->
                        <div class="modal fade" id="updateData{{$data->id}}" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Update Data</h4>
                                    </div>
                                    <div class="container">
                                        <form class="user" action="/updateBarang/{{$data->id}}" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <input type="text" name="nama_barang"
                                                    class="form-control form-control-user" id="exampleFirstName"
                                                    placeholder="Nama Barang" value="{{$data->nama_barang}}">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="harga" class="form-control form-control-user"
                                                    id="exampleFirstName" placeholder="Harga Barang"
                                                    value="{{$data->harga}}">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="kode" class="form-control form-control-user"
                                                    id="exampleFirstName" placeholder="Kode Barang"
                                                    value="{{$data->kode}}">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="stok" class="form-control form-control-user"
                                                    id="exampleFirstName" placeholder="Stok Barang"
                                                    value="{{$data->stok}}">
                                            </div>
                                            <div class="form-group">
                                                <input type="file" name="fotoBarang"
                                                    class="form-control form-control-user" id="exampleFirstName">
                                            </div>
                                            <div>
                                                <input type="text" name="status" value="ada" hidden>
                                            </div>
                                            <button class="btn btn-primary btn-user btn-block" type="submit">Update Data
                                                Barang</button>
                                            <hr>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Untuk Hapus -->
                        <div class="modal fade" id="hapusData{{$data->id}}" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Hapus Data</h4>
                                    </div>
                                    <form class="user" action="/hapusBarang/{{$data->id}}" method="POST">
                                        <div class="container">
                                            <input type="text" value="kosong" name="status" hidden>
                                            {{ csrf_field() }}
                                            <button class="btn btn-primary btn-user btn-block" type="submit">Hapus Data
                                                Barang</button>
                                            <hr>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
                @endforeach
                </table>
            </div>
        </div>
    </div>

    <!-- Modal untuk menambahkan data-->
    <div class="modal fade" id="tambahData" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Data</h4>
                </div>
                <div class="container">
                    <form class="user" action="/tambahBarang" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" name="nama_barang" class="form-control form-control-user"
                                id="exampleFirstName" placeholder="Nama Barang">
                        </div>
                        <div class="form-group">
                            <input type="text" name="harga" class="form-control form-control-user" id="exampleFirstName"
                                placeholder="Harga Barang">
                        </div>
                        <div class="form-group">
                            <input type="text" name="kode" class="form-control form-control-user" id="exampleFirstName"
                                placeholder="Kode Barang 5">
                        </div>
                        <div class="form-group">
                            <input type="text" name="stok" class="form-control form-control-user" id="exampleFirstName"
                                placeholder="Stok Barang">
                        </div>
                        <div class="form-group">
                            <input type="file" name="fotoBarang" class="form-control form-control-user"
                                id="exampleFirstName">
                        </div>
                        <div>
                            <input type="text" name="status" value="ada" hidden>
                        </div>
                        <button class="btn btn-primary btn-user btn-block" type="submit">Tambah Data Barang</button>
                        <hr>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>




    @endsection