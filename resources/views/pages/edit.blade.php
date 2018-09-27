@extends('layout_form')

@section('form_content')

<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">最新消息管理</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-left">
          <ul class="breadcrumb" style="margin-bottom: 0px; margin-top: 0px;">
            <li class="breadcrumb-item">
              <a href="../console/console.php">主控台</a>
            </li>
            <li class="breadcrumb-item">消息管理</li>
           <li class="breadcrumb-item active">
         </li>
            <li class="breadcrumb-item active">新增</li>
          </ul>
          <a href="{{ route('pages.index')}}" class="btn btn-outline-primary m-2">回上一頁</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          {!! Form::model($pages, ['method' => 'PATCH','route' => ['pages.update', $pages->pages_id]]) !!}
              @include('pages.form')
            {!! Form::close() !!}
      
         
        </div>
      </div>
      @endsection