@extends('layout_List')
@section('content')
<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">產品分類管理</h1>
            
        </div>
      </div>
    </div>
  </div>
  <div class="py-3 text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-left">
          <ul class="breadcrumb" style="margin-bottom: 0px; margin-top: 0px;">
            <li class="breadcrumb-item">
              <a href="../console/console.php">主控台</a>
            </li>
            <li class="breadcrumb-item active">產品分類管理</li>
            <li class="breadcrumb-item active">
         
            </li>
          </ul>
          <a href="{{ route('product_categories.create') }}" class="btn btn-outline-primary m-2">新增</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>上架日期</th>
                <th>產品項目</th>
         
                <th width="15%">操作</th>
              </tr>
            </thead>
            <tbody>
            
            @foreach ($product_categories as $product_categorie)
                
           
              <tr>
                <td width="10%">{{$product_categorie->published_date}}</td>
           
                <td width="35%">{{$product_categorie->category}}</td>
             <td>
                  <a href="{{ 'products/'.$product_categorie->product_categories_id }}" class="btn btn-outline-primary">細項管理</a>  
                    
                    {{--  <a href="{{ route('products/product_categories_id',$product_categorie->product_categories_id) }}" class="btn btn-outline-primary">細項管理</a>   --}}

                  <a href="{{ route('product_categories.edit',$product_categorie->product_categories_id) }}" class="btn btn-outline-primary">編輯</a>
                 
                  {{-- <a href="{{ route('product_categories.destroy',$product->product_categories_id) }}" class="btn btn-outline-primary" onclick="if(!confirm('是否確定刪除此筆資料?刪除後無法回復')){return false;};" value="Delete">刪除</a> --}}

                  {!! Form::open(['method' => 'DELETE','route' => ['product_categories.destroy', $product_categorie->product_categories_id],'style'=>'display:inline']) !!}
                    {{-- blade語法 form表單 方法=刪除 action路徑 'articles.destroy',帶入 $article->id 的值 樣式='display:inline' --}}
                    {!! Form::submit('刪除', ['class' => 'btn btn-outline-primary']) !!}
                    {{-- blade語法 form表單 呼叫submit按鈕('value','樣式') --}}
                    {!! Form::close() !!}
                    {{-- blade語法 form表單 結尾 --}}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
   
      {!!  $product_categories->links() !!}
      {{-- 保護 $product_categories 在未定義時被攻擊 --}}
@endsection