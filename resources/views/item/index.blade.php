@extends('layouts.master')

@section('content')
 <!-- Content Header (Page header) -->

 <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
          <h1 class="m-0 text-dark">จัดการครุภัณฑ์</h1>
          <div class="card-header h4">
              <?= link_to('item/create',$title = 'เพิ่มข้อมูล',['class'=>'btn btn-primary'], $sucue = null); ?>
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
                <th>รายชื่อครุภัณฑ์</th>
                <th>รหัสครุภัณฑ์</th>
                <th>ประเภทครุภัณฑ์</th>
                <th>ราคา</th>
                <th>หน่วยนับ</th>
                <th>รายละเอียด</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
              </tr>
            </thead>
            @foreach ($item as $items )
            <tbody>
            <tr>
                <td>{{ $items->id }}</td>
                <td>{{ $items->name }}</td>
                <td>{{ $items->idname }}</td>
                <td>{{ $items->categories->name }}</td>
                <td>{{ $items->price,2 }}</td>
                <td>{{ $items->typename }}</td>

                <td>
                    <a href="{{ $items->id }}" class="btn btn-primary">รายละเอียด</a>
                <td>
                    <a href="{{ $items->id }}" class="btn btn-success">แก้ไข</a>
                </td>
                <td>
                    <form action="{{ $items->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value='ลบ' class="btn btn-danger"onclick="return confirm('คุณต้องการลบข้อมูล {{ $items->name}}?')">
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
