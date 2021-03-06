@extends('layouts.master')

@section('content')
 <!-- Content Header (Page header) -->

 <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
          <h1 class="m-0 text-dark">จัดการครุภัณฑ์</h1>
          @if (session('status'))
          <div class="alert alert-success col-md-6" role="alert">
              {{ session('status') }}
          </div>
          @endif
        <div class="card-body">
            <div class="card-header h4">
                <?= link_to('item/create',$title = 'เพิ่มข้อมูล',['class'=>'btn btn-outline-primary'], $sucue = null); ?>
            </div>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <th scope="col">รายชื่อครุภัณฑ์</th>
                  <th scope="col">รหัสครุภัณฑ์</th>
                  <th scope="col">ประเภทครุภัณฑ์</th>
                  <th scope="col">ราคา</th>
                  <th scope="col">หน่วยนับ</th>
                  <th scope="col">สถานะ</th>
                  <th scope="col">รูปภาพ</th>
                  <th scope="col">แก้ไข</th>
                  <th scope="col">ลบ</th>
              </tr>
            </thead>
            @foreach ($item as $items )
            <tbody>
            <tr>
                <td>{{ $items->name }}</td>
                <td>{{ $items->idname }}</td>
                <td>{{ $items->categories->name }}</td>
                <td>{{ number_format($items->price,2) }}</td>
                <td>{{ $items->typename }}</td>
                <td>{{ $items->id_status }}</td>
                <td>
                <a href="{{ asset('images/'.$items->image) }}">
                <img src="{{ asset('images/resize/'.$items->image)}}"style="width:50px"></a>
            </td>
                <td>
                    <a href="{{ route('item.edit',$items->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                </td>
                <td>
                    <?= Form::open(array('url' =>'item/'.$items->id,'method'=>'delete','onsubmit'=>'return confirm("ต้องการลบข้อมูล");'))?>
                    <button type="submit" class="btn btn-sm btn-danger "><i class="fa fa-trash"></i></button>
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

@endsection
