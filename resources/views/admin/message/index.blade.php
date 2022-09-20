@extends('layouts.adminbase')
@section('title','Contact Form Message List')
@section('css')
    
@endsection

@section('content')

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Contact Form Message List
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Message</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Message List</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            <tbody><tr>
              <th style="width: 10px">#</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Message</th>
              <th>Status</th>
              <th style="width: 40px">Show</th>
              <th style="width: 40px">Delete</th>
            </tr>
            @foreach ($data as $rs)
            <tr>
              <td>{{$rs->id}}</td>
              <td>{{$rs->name}}</td>
              <td>{{$rs->phone}}</td>
              <td>{{$rs->email}}</td>
              <td>{{$rs->subject}}</td>
              <td>{{$rs->message}}</td>
              <td>{{$rs->status}}</td>
              <td>
                <a href="{{route('admin.message.show',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm"
                  onclick="return !window.open(this.href, '', 'top=50 left=100 witdh=1100, height=700')">
                  Show
                </a>
              </td>
              <td>
                <a href="{{route('admin.message.destroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" 
                  onclick="return confirm('Deleting !! Are you sure?')">
                  Delete
                </a>
              </td>
            </tr>
            @endforeach
          </tbody></table>
        </div><!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <li><a href="#">«</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">»</a></li>
          </ul>
        </div>
      </div>

    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->

@endsection

@section('js')
      
@endsection