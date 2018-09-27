<div class="form-group form-row">
    <label class="col-sm-2 col-form-label">產品圖片</label>
    <div class="col-sm-10">
      {{-- <input type="text" class="form-control" id="published_date" name="published_date" >  --}}
      {!! Form::text('picture', null, array('class' => 'form-control')) !!}
      {!! Form::file('picture'); !!}
    </div>

  </div>
  <div class="form-group form-row">
    <label class="col-sm-2 col-form-label">產品名稱</label>
    <div class="col-sm-6">
      {{-- <input type="text" class="form-control"name="title">  --}}
      {!! Form::text('name', null, array('class' => 'form-control')) !!}
    </div>
    <label class="col-sm-2 col-form-label">產品價格</label>
    <div class="col-sm-2">
      {{-- <input type="text" class="form-control"name="title">  --}}
      {!! Form::text('price', null, array('class' => 'form-control')) !!}
    </div>
      
  </div>
  <div class="form-group form-row">
    <label class="col-sm-2 col-form-label">產品說明</label>
    <div class="col-sm-10">
      {{-- <textarea row="10" class="form-control" name="content"></textarea> --}}
      {!! Form::textarea('description', null, array('row' => '10','class' => 'form-control','style'=>'height:150px')) !!}
    
    {!! Form::hidden('product_categories_id', $product_categories_id) !!}
    
    </div>
  </div>
  <div class="col-md-12 text-right">
    <input type="reset" class="btn btn-primary" value="取消並回上一頁">

    <button type="submit" class="btn btn-primary">確認送出</button>

   

  </div>