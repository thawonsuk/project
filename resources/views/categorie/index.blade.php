@extends('layouts.master')

@section('content')
 <!-- Content Header (Page header) -->

 <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
          <h1 class="m-0 text-dark">ประเภทครุภัณฑ์</h1>
          <div class="card-body">
            <div class="card-header h4">
                <?= link_to('categorie/create',$title = 'เพิ่มข้อมูล',['class'=>'btn btn-outline-primary'], $sucue = null); ?>
            </div>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <th scope="col">รายชื่อประเภทครุภัณฑ์</th>
                <th scope="col">ลบประเภทครุภัณฑ์</th>
              </tr>
            </thead>
            @foreach ($categories as $categorie )
            <tbody>
            <tr>
                <td>{{ $categorie->name }}</td>
                <td>
                  <?= Form::open(array('url' =>'categorie/'.$categorie->id,'method'=>'delete','onsubmit'=>'return confirm("ต้องการลบข้อมูล");'))?>
                  <button type="submit" class="btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                  {!! Form::close() !!}
                </td>
            </tr>
        </tbody>
            @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 </div>


@endsection
