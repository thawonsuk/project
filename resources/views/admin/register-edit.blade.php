@extends('layouts.master')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">แก้ไขรายชื่อผู้ใช้</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<section class="content">
    <div class="crad-body">
        <div class="row">
            <div class="col-md-6">
            <form action="/role-register-update/{{ $users->id}}" method="POST">
                    {{ csrf_field()}}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="username" value="{{ $users->name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Give Role</label>
                        <select name="usertype" class="form-control">
                            <option value="admin">Admin</option>
                            <option value="vendor">Vendor</option>
                            <option value="">None</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success"> Update </button>
                    <a href="/role-register"  class="btn btn-danger"> Cancel </a>

                </form>
            </div>
        </div>
    </div>

</section>
  @endsection
