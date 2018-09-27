@extends('layout_form')

@section('form_content')

    <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">產品管理</h1>
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
            <li class="breadcrumb-item">產品管理</li>
            <li class="breadcrumb-item active">
            </li>
            <li class="breadcrumb-item active">新增</li>
          </ul>
          <a href="{{ $product_categories_id }}" class="btn btn-outline-primary m-2">回上一頁</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            {!! Form::open(array('url' => 'products/'. $product_categories_id.'/store','method'=>'POST','files'=>true)) !!}
              @include('products.form')
            {!! Form::close() !!}
      
         
        </div>
      </div>
      @endsection