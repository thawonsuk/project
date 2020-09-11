@extends('layouts.master')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <?= link_to('item/add',$title = 'เพิ่มประเภทครุภัณฑ์',['class'=>'btn btn-primary'], $sucue = null); ?>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<div class="card-body">
    <div class="row">
        <div class="col-md-6">
            {!! Form::open(['action' => 'ItemController@store','method'=>'POST']) !!}

    <div class="form-group">
            <?=Form::label('ชื่อครุภัณฑ์');?>
            <?=Form::text('name',null,['class' => 'form-control',]);?>
    </div>
    <div class="form-group">
            <?=Form::label('รหัสครุภัณฑ์');?>
            <?=Form::text('idname',null,['class' => 'form-control']);?>
    </div>
    <div class="form-group">
        <?=Form::label('ประเภทครุภัณฑ์');?>
        <?=Form::select('categories_id',$categories,('categories_id'),['class' => 'form-control']);?>
</div>

    <div class="form-group">
            <?=Form::label('ราคา');?>
            <?=Form::text('price',null,['class' => 'form-control']);?>
    </div>
    <div class="form-group">
            <?=Form::label('หน่วยนับ');?>
            <?=Form::text('typename',null,['class' => 'form-control']);?>
    </div>
    <div class="form-group">
            <?=Form::label('รูปภาพ');?>
            <?=Form::file('image',null,['class' => 'form-control']);?>
</div>
    <div class="form-group">
            <?=Form::submit('บันทึก',['class'=>'btn btn-primary']);?>

            <a href="/item" class="btn btn-danger">กลับ</a>
    </div>
        </div>
    </div>
</div>

@endsection
