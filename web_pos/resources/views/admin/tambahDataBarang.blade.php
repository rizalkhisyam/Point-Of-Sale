@extends('admin/index')
@section('container')
<br><br><br>

<form class="user">
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama Barang">
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Jumlah Barang">
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Harga Barang">
    </div>
    <a href="login.html" class="btn btn-primary btn-user btn-block">
        Tambah Data Barang
    </a>
    <hr>

</form>
@endsection
