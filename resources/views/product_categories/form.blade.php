
<div class="form-group form-row">
   
    
      {{-- <input type="text" class="form-control" id="published_date" name="published_date" >  --}}
     
      {!! Form::hidden('published_date', date ("Y-m-d / H:i:s"), array('id'=>'published_date','class' => 'form-control')) !!}
   

  </div>
  <div class="form-group form-row">
    <label class="col-sm-2 col-form-label">產品項目</label>
    <div class="col-sm-10">
      {{-- <input type="text" class="form-control"name="title">  --}}
      {!! Form::text('category', null, array('class' => 'form-control')) !!}
    </div>
      
  </div>
 
  <div class="col-md-12 text-right">
    <input type="reset" class="btn btn-primary" value="取消並回上一頁">

    <button type="submit" class="btn btn-primary">確認送出</button>

   

  </div>