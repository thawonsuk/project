@extends('layouts.master')

@section('content')
 <!-- Content Header (Page header) -->

 <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
          <h1 class="m-0 text-dark">จัดการผู้ใช้</h1>
          @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
          @endif
          <div class="card-tools">
          </div>
        </div>

  <div class="card-body table-responsive p-0" style="height: 300px;">
    <table class="table table-head-fixed text-nowrap">
        <thead>
                <th>ID</th>
                <th>ชื่อ</th>
                <th>อีเมลล์</th>
                <th>สิทธ์ผู้ใช้งาน</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </thead>

                @foreach ($users as $row)
                <tbody>
                <tr>
                    <td>{{ $row->id  }}</td>
                    <td>{{ $row->name  }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->usertype  }}</td>
                    <td>
                        <a href="/role-edit/{{ $row->id }}" class="btn btn-warning">แก้ไข</a>
                    </td>
                    <td>
                        <form action="/role-delete/{{ $row->id }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="submit" value='ลบ' class="btn btn-danger"onclick="return confirm('คุณต้องการลบข้อมูล {{ $row->name}}?')">
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


@endsection
