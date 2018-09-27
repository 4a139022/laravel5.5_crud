<div class="form-group form-row">
    <label class="col-sm-2 col-form-label">加入日期</label>
    <div class="col-sm-2">
      {{-- <input type="text" class="form-control" id="published_date" name="published_date" >  --}}
      {!! Form::text('published_date', null, array('id'=>'published_date','class' => 'form-control')) !!}
    </div>
    <label class="col-sm-2 col-form-label">帳號</label>
    <div class="col-sm-2">
      {{-- <input type="text" class="form-control" id="published_date" name="published_date" >  --}}
      {!! Form::text('account', null, array('class' => 'form-control')) !!}
    </div>
    <label class="col-sm-2 col-form-label">密碼</label>
    <div class="col-sm-2">
      {{-- <input type="text" class="form-control" id="published_date" name="published_date" >  --}}
      {!! Form::text('password', null, array('class' => 'form-control')) !!}
    </div>
  </div>
  <div class="form-group form-row">
    <label class="col-sm-2 col-form-label">姓名</label>
    <div class="col-sm-2">
      {{-- <input type="text" class="form-control"name="title">  --}}
      {!! Form::text('name', null, array('class' => 'form-control')) !!}
    </div>
    <label class="col-sm-2 col-form-label">性別</label>
    <div class="col-sm-2">
      {{-- <input type="text" class="form-control"name="title">  --}}
      男 {!! Form::radio('gender', '0') !!}
      女 {!! Form::radio('gender', '1') !!}
    </div>
    <label class="col-sm-2 col-form-label">生日</label>
    <div class="col-sm-2">
      {{-- <input type="text" class="form-control"name="title">  --}}
      {!! Form::text('birthday', null, array('class' => 'form-control')) !!}
    </div>
      
  </div>
  <div class="form-group form-row">
    <label class="col-sm-2 col-form-label">email</label>
    <div class="col-sm-2">
      {{-- <input type="text" class="form-control"name="title">  --}}
      {!! Form::text('email', null, array('class' => 'form-control')) !!}
    </div>
    <label class="col-sm-2 col-form-label">家電</label>
    <div class="col-sm-2">
      {{-- <input type="text" class="form-control"name="title">  --}}
      {!! Form::text('phone', null, array('class' => 'form-control')) !!}
    </div>
    <label class="col-sm-2 col-form-label">手機</label>
    <div class="col-sm-2">
      {{-- <input type="text" class="form-control"name="title">  --}}
      {!! Form::text('mobile', null, array('class' => 'form-control')) !!}
    </div>
      
  </div>
  <div class="form-group form-row">
    <label class="col-sm-2 col-form-label">區號</label>
    <div class="col-sm-2">
      {{-- <input type="text" class="form-control"name="title">  --}}
      {!! Form::text('zipcode', null, array('class' => 'form-control')) !!}
    </div>
    <label class="col-sm-2 col-form-label">地區</label>
    <div class="col-sm-2">
      {{-- <input type="text" class="form-control"name="title">  --}}
      {!! Form::text('country', null, array('class' => 'form-control')) !!}
    </div>
    <label class="col-sm-2 col-form-label">地址</label>
    <div class="col-sm-2">
      {{-- <input type="text" class="form-control"name="title">  --}}
      {!! Form::text('address', null, array('class' => 'form-control')) !!}
    </div>
      
  </div>
  <div class="form-group form-row">
    <label class="col-sm-2 col-form-label">資格</label>
    <div class="col-sm-2">
      {{-- <input type="text" class="form-control"name="title">  --}}
      一般 {!! Form::radio('status', '0', true) !!}
      白金 {!! Form::radio('status', '1') !!}
      尊爵 {!! Form::radio('status', '2') !!}
    </div>
    <label class="col-sm-2 col-form-label">儲值金額</label>
    <div class="col-sm-2">
      {{-- <input type="text" class="form-control"name="title">  --}}
      {!! Form::text('money', null, array('class' => 'form-control')) !!}
    </div>
    <label class="col-sm-2 col-form-label">描述</label>
    <div class="col-sm-2">
      {{-- <input type="text" class="form-control"name="title">  --}}
      {!! Form::text('district', null, array('class' => 'form-control')) !!}
    </div>
      
  </div>
  <div class="form-group form-row">
    <label class="col-sm-2 col-form-label">備註</label>
    <div class="col-sm-10">
      {{-- <textarea row="10" class="form-control" name="content"></textarea> --}}
      {!! Form::textarea('content', null, array('row' => '10','class' => 'form-control','style'=>'height:150px')) !!}
    </div>
  </div>
  <div class="col-md-12 text-right">
    <input type="reset" class="btn btn-primary" value="取消並回上一頁">

    <button type="submit" class="btn btn-primary">確認送出</button>

   

  </div>