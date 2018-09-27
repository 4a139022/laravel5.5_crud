@extends('layout_List')
@section('content')
<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">產品管理</h1>
             <a href="list.php?status=0" class="btn btn-outline-primary m-2">最新消息</a>
             <a href="list.php?status=1" class="btn btn-outline-primary m-2">會員活動</a>
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
            <li class="breadcrumb-item active">產品管理</li>
            <li class="breadcrumb-item active">
         
            </li>
          </ul>
          <a href="{{ route('product_categories.index')}}" class="btn btn-outline-primary m-2">回產品分類管理</a>
          <a href="{{ url('products/'.$product_categories_id.'/create')}}" class="btn btn-outline-primary m-2">新增</a>

    
          

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>產品圖片</th>
                <th>產品名稱</th>
                <th>產品內容</th>
                <th>價格</th>
                
                <th width="15%">操作</th>
              </tr>
            </thead>
            <tbody>
            
            @foreach ($products as $product)
                
           
              <tr>
                <td width= "20%"><img width="100%" src="{{url('img/'.$product->picture)}}" alt=""></td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
               
           
               
   
                <td>
                
                  <a href="{{ $product->product_categories_id.'/'.$product->products_id.'/edit' }}" class="btn btn-outline-primary">編輯</a>
                 
                  {{-- <a href="{{ route('products.destroy',$product->products_id) }}" class="btn btn-outline-primary" onclick="if(!confirm('是否確定刪除此筆資料?刪除後無法回復')){return false;};" value="Delete">刪除</a> --}}
                   
                  {!! Form::open(['method' => 'DELETE','url' => 'products/'.$product->product_categories_id.'/' .$product->products_id,'style'=>'display:inline']) !!} 

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
   
      {!!  $products->links() !!}
      {{-- 保護 $products 在未定義時被攻擊 --}}
@endsection