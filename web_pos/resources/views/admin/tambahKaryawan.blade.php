@extends('admin/index')
@section('container')
<br><br><br>

<form class="user">
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama Karyawan">
    </div>
    <div class="form-group">
        <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
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
        Tambah Karyawan
    </a>
    <hr>

</form>

@endsection

