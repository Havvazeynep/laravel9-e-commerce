@extends('layouts.front')
@section('title', 'User Login | ' . $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))
@section('css')
    
@endsection
@section('content')

<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="{{route('index')}}">Home</a>
                <span class="breadcrumb-item active">Login</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12 bg-light">
            @include('auth.login')
        </div>
    </div>
</div>

    
@endsection
@section('js')
    
@endsection