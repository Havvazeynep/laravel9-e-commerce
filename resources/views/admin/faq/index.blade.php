@extends('layouts.adminbase')
@section('title','FAQ')
@section('css')
    
@endsection

@section('content')

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <a href="{{route('admin.faq.create')}}" class="btn btn-block btn-info" style="width:200px;">Add Question</a>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Faq List</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            <tbody><tr>
              <th style="width: 10px">ID</th>
              <th>Question</th>
              <th>Answer</th>
              <th>Status</th>
              <th style="width: 40px">Edit</th>
              <th style="width: 40px">Delete</th>
              <th style="width: 40px">Show</th>
            </tr>
            @foreach ($data as $rs)
            <tr>
              <td>{{$rs->id}}</td>
              <td>{{$rs->question}}</td>
              <td>{!!$rs->answer!!}</td>
              <td>{{$rs->status}}</td>
              <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}" class="btn btn-block btn-info btn-sm">Edit</a></td>
              <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Deleting !! Are you sure?')">Delete</a></td>
              <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm">Show</a></td>
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