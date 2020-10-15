@extends('layouts.master')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h1 class="m-0 text-dark">เพิ่มข้อมูล</h1>
            @if (count($errors) > 0)
            <div class="alert alert-danger" >
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
  <div class="card-body">
    <div class="row">
        <div class="col-md-6">
            {!! Form::open(['action' => 'ItemController@store','method'=>'POST']) !!}
        <div class="form-group">
            <?=Form::label('ชื่อครุภัณฑ์');?>
            <?=Form::text('name',null,['class' => 'form-control','placeholder'=>"ชื่อครุภัณฑ์"]);?>
        </div>
        </div>
        <div class="form-group col-md-6">
            <?=Form::label('รหัสครุภัณฑ์');?>
            <?=Form::text('idname',null,['class' => 'form-control','placeholder'=>"รหัสครุภัณฑ์"]);?>
        </div>
    </div>
        <div class="form-group col-md-4">
            <?=Form::label('ประเภทครุภัณฑ์');?>
            <?=Form::select('categories_id',$categories,('categories_id'),['class' => 'form-control']);?>
        </div>
        <div class="form-group col-md-3">
            <?=Form::label('ราคา');?>
            <?=Form::text('price',null,['class' => 'form-control','placeholder'=>"ราคา"]);?>
        </div>
        <div class="form-group col-md-3">
            <?=Form::label('หน่วยนับ');?>
            <?=Form::text('typename',null,['class' => 'form-control','placeholder'=>"หน่วยนับ"]);?>
        </div>
        <div class="form-group col-md-3">
        <?=Form::label('สถานะ');?>
        <select name="id_status" class="form-control custom-select">
            <option selected disabled>เลือกสถานะ</option>
            <option value="ใช้งานปกติ">ใช้งานปกติ</option>
            <option value="ชำรุด">ชำรุด</option>
            <option value="รอซ่อม">รอซ่อม</option>
        </select>
        </div>
        <div class="form-group col-md-6">
            <?=Form::label('รายละเอียด');?>
            <?=Form::textarea('detail',null,['class' => 'form-control','rows'=>"4"]);?>
        </div>
        <div class="form-group">
            <?=Form::label('รูปภาพ');?>
            <?=Form::file('image',null,['class' => 'form-control']);?>
        </div>
        <div class="form-group">
            <?=Form::submit('บันทึก',['class'=>'btn btn-success']);?>
            <a href="/item" class="btn btn-danger">กลับ</a>
        </div>
        </div>
        </div>
        </div>
      </div>
    </div>
 </div>


@endsection
