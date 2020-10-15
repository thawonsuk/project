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
                  <th scope="col">ลบ</th>
              </tr>
            </thead>

        </table>

                </div>
              </div>
           </div>
        </div>
      </div>
    </div>

@endsection
