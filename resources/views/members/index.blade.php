@extends('layout_List')
@section('content')
<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">會員管理</h1>
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
            <li class="breadcrumb-item active">消息管理</li>
            <li class="breadcrumb-item active">
         
            </li>
          </ul>
          <a href="{{ route('members.create') }}" class="btn btn-outline-primary m-2">新增</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>加入日期</th>
                <th>帳號</th>
                <th>密碼</th>
                <th>姓名</th>
                <th>性別</th>
                <th>儲值金額</th>
                <th>等級</th>
                <th width="15%">操作</th>
              </tr>
            </thead>
            <tbody>
            
            @foreach ($members as $member)
                
           
              <tr>
                <td>{{$member->published_date}}</td>
           
                <td >{{$member->account}}</td>
                
                <td>{{$member->password}}</td>
           
                <td >{{$member->name}}</td>

                {{-- <td>{{$member->gender}}</td> --}}
                <td>@if ($member->gender==1)
                    男
                @else
                    女
                @endif</td>
          
                <td>{{$member->money}}</td>
           
                {{-- <td>{{$member->status}}</td> --}}
                <td>@switch($member->status)
                    @case(0)
                        一般
                        @break
                    @case(1)
                        白金
                        @break
                    
                    @case(2)
                        尊爵
                        @break
                      
                @endswitch</td>
            
   
                <td>
                
                  <a href="{{ route('members.edit',$member->members_id) }}" class="btn btn-outline-primary"">編輯</a>
                 
                  {{-- <a href="{{ route('members.destroy',$member->members_id) }}" class="btn btn-outline-primary" onclick="if(!confirm('是否確定刪除此筆資料?刪除後無法回復')){return false;};" value="Delete">刪除</a> --}}

                  {!! Form::open(['method' => 'DELETE','route' => ['members.destroy', $member->members_id],'style'=>'display:inline']) !!}
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
   
      {!!  $members->links() !!}
      {{-- 保護 $members 在未定義時被攻擊 --}}
@endsection