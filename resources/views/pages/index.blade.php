@extends('layout_List')
@section('content')
<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">頁面管理</h1>
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
            <li class="breadcrumb-item active">頁面管理管理</li>
            <li class="breadcrumb-item active">
         
            </li>
          </ul>
    
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table text-center">
            <thead>
              <tr>
               
                <th>標題</th>
                <th>內容</th>
                <th width="15%">操作</th>
              </tr>
            </thead>
            <tbody>
            
            @foreach ($pages as $page)
                
           
              <tr>
              
           
                <td width="35%"class="text-center">{{$page->title}}</td>
           
                <td class="text-left">{{$page->content}}</td>
   
                <td>
                
                  <a href="{{ route('pages.edit',$page->pages_id) }}" class="btn btn-outline-primary">編輯</a>
                 
                 
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
   
      {!!  $pages->links() !!}
      {{-- 保護 $pages 在未定義時被攻擊 --}}
@endsection