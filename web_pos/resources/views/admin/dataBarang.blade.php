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
              <h6 class="m-0 font-weight-bold text-primary">Data Table</h6>
            </div>
            <div class="card-header py-3">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tambahData">Tambah Data Barang</button>
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
                      <th>Status</th>
                     
                    </tr>
                  </thead>
                  
                  <tbody>
                  @foreach($tampil as $data)
                    <tr>
                      <td>{{$data->nama_barang}}</td>
                      <td>{{$data->harga}}</td>
                      <td>{{$data->kode}}</td>
                      <td>{{$data->stok}}</td>
                      <td>
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#updateData">Update</button>
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#hapusData">Hapus</button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
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
            <form class="user" action="/tambahBarang" method="POST" >
            {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="nama_barang" class="form-control form-control-user" id="exampleFirstName"
                        placeholder="Nama Barang">
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
                <button class="btn btn-primary btn-user btn-block" type="submit">Tambah Data Barang</button>
                <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                    Tambah Data Barang
                </a> -->
                <hr>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Modal untuk Update -->
  <div class="modal fade" id="updateData" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Data</h4>
        </div>
        <div class="container   ">
            <form class="user">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                        placeholder="Nama Barang">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                        placeholder="Jumlah Barang">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                        placeholder="Harga Barang">
                </div>
                <a href="login.html" class="btn btn-primary btn-user btn-block">
                    Update Barang
                </a>
                <hr>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Modal Untuk Hapus -->
  <div class="modal fade" id="hapusData" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Data</h4>
        </div>
        <div class="container   ">
            
               
                <a href="login.html" class="btn btn-primary btn-user btn-block">
                    Hapus Barang
                </a>
                <hr>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

        </div>


        @endsection