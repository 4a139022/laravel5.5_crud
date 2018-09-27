<div class="form-group form-row">

  </div>
  <div class="form-group form-row">
    <label class="col-sm-2 col-form-label">標題</label>
    <div class="col-sm-10">
      {{-- <input type="text" class="form-control"name="title">  --}}
      {!! Form::text('title', null, array('class' => 'form-control')) !!}
    </div>
      
  </div>
  <div class="form-group form-row">
    <label class="col-sm-2 col-form-label">消息內容</label>
    <div class="col-sm-10">
      {{-- <textarea row="10" class="form-control" name="content"></textarea> --}}
      {!! Form::textarea('content', null, array('row' => '10','class' => 'form-control','style'=>'height:150px')) !!}
    </div>
  </div>
  <div class="col-md-12 text-right">
    <input type="reset" class="btn btn-primary" value="取消並回上一頁">

    <button type="submit" class="btn btn-primary">確認送出</button>

   

  </div>
