@extends('layouts.master')

@section('content')
 <!-- Content Header (Page header) -->

 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">เพิ่มข้อมูล</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<div class="card-body">
    <div class="row">
        <div class="col-md-6">
            {!! Form::open(['action' => 'CategorieController@store','method'=>'POST']) !!}
    <div class="form-group">
            <?=Form::label('เพิ่มประเภทครุภัณฑ์');?>
            <?=Form::text('name',null,['class' => 'form-control',]);?>
    </div>
    <input type="submit" value="บันทึก" class="btn btn-primary">
        <a href="/categorie" class="btn btn-danger">กลับ</a>
        </div>
    </div>
</div>

@endsection
