@extends('admin/index')
@section('container')
<div id="content">
<br><br>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tabel Data Karyawan</h1>
          <p class="mb-4">Data Karyawan.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Table</h6>
            </div>
            <div class="card-header py-3">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tambahData">Tambah Data Karyawan</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>E-mail</th>
                      <th>Status Karyawan</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                  @foreach($karyawan as $kr)
                    <tr>
                      <td>{{$kr -> name}}</td>
                      <td>{{$kr -> email}}</td>
                      <td>{{$kr -> level}}</td>
                      <td>
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#updateData">Update</button>
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#hapusData{{$karyawan->id}}">Hapus</button>
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
          <!-- <h4 class="modal-title">Tambah Data</h4> -->
        </div>
        <div class="container   ">
        <form class="user" method="post" action="/addKaryawan">
        @csrf
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                    placeholder="Nama Karyawan" name="name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="Email Address" name="email">
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                        placeholder="Password" name="password">
                </div>
                <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword"
                        placeholder="Repeat Password">
                </div>
                <input type="hidden" value="2" name="level">
            </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                Tambah Karyawan
                </button>
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
          <!-- <h4 class="modal-title">Update Data</h4> -->
        </div>
        <div class="container   ">
        <form class="user">
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                    placeholder="Nama Karyawan">
            </div>
            <div class="form-group">
                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="Email Address">
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                        placeholder="Password">
                </div>
                <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword"
                        placeholder="Repeat Password">
                </div>
            </div>
            <a href="login.html" class="btn btn-primary btn-user btn-block">
                Update Data Karyawan
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
          <!-- <h4 class="modal-title float-left">Hapus Data</h4> -->
        </div>
        <div class="container   ">
            <a href="login.html" class="btn btn-primary btn-user btn-block">
                Hapus Data Karyawan
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