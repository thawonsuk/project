@extends('layouts.master')

@section('content')
 <!-- Content Header (Page header) -->

 <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
          <h1 class="m-0 text-dark">ประเภทครุภัณฑ์</h1>
          <div class="card-header h4">
              <?= link_to('categorie/create',$title = 'เพิ่มข้อมูล',['class'=>'btn btn-success'], $sucue = null); ?>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                <thead>
                <th>ลำดับ</th>
                <th>รายชื่อประเภทครุภัณฑ์</th>
                <th>ลบประเภทครุภัณฑ์</th>
              </tr>
            </thead>
            @foreach ($categories as $categorie )
            <tbody>
            <tr>
                <td>{{ $categorie->id }}</td>
                <td>{{ $categorie->name }}</td>
                <td>
                    <form action="{{ route('categorie.destroy',$categorie->id ) }}" method="post">
                        @csrf
                        @method('DELETE')
                    <input type="submit" value='ลบ' class="btn btn-danger"onclick="return confirm('คุณต้องการลบข้อมูล {{ $categorie->name}}?')">

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
