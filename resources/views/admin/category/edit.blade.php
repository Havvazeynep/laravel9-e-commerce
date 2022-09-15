@extends('layouts.adminbase')
@section('title', 'Edit Category :'.$data->title)
@section('css')
    
@endsection

@section('content')

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Category: {{$data->title}}
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('admin_category')}}">Category</a></li>
        <li class="active">Edit Category</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Category Elements</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/admin/category/update/{{$data->id}}">
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" name="title" value="{{$data->title}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Keywords</label>
                    <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control" name="description" value="{{$data->description}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <input type="file" id="exampleInputFile">
                  <p class="help-block">Choose image file.</p>
                </div>
                <div class="form-group">
                    <label>Select</label>
                    <select class="form-control" name="status">
                      <option selected>{{$data->status}}</option>
                      <option>True</option>
                      <option>False</option>
                    </select>
                </div>
              </div><!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update Data</button>
              </div>
            </form>
          </div>

    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->

@endsection

@section('js')
      
@endsection