@extends('layouts.master')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
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
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <form action="/role-register-create/{{ $users->id}}" method="POST">
        <div class="form-group">
            <?=Form::label('ชื่อ-นามสกุล');?>
            <?=Form::text('name',null,['class' => 'form-control',]);?>
        </div>
        </div>
        <div class="form-group col-md-6">
            <?=Form::label('อีเมลล์');?>
            <?=Form::text('idname',null,['class' => 'form-control']);?>
        </div>
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
