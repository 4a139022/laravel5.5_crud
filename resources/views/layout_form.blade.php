<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="{{url('js/jquery-ui-1.12.1/jquery-ui.min.css')}}">
  <link rel="stylesheet" href="{{url('css/theme.css')}}" type="text/css">
  <script src="{{url('js/validator.js')}}"></script>
  
</head>
<body>
    
  @include('nav')

    @yield('form_content')
    {{-- 含括語法 接收外部聯結 名為content 的內容--}}

    <div class="row">
      <div class="col-md-12"> </div>
    </div>
  </div>
</div>
<div id="foot_wel" class="py-3 bg-dark text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-3 text-center">
        <p>© Copyright 2018 MacroViz - All rights reserved.</p>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{url('js/jquery-ui-1.12.1/jquery.js')}}"></script>
<script src="{{url('js/jquery-ui-1.12.1/jquery-ui.min.js')}}"></script>

<!-- 導入 tinymce 外掛-->
<script src="{{url('js/tinymce/tinymce.min.js')}}"></script>
<script src="{{url('js/validator.js')}}"></script>

<!-- jquery 日期選擇器 -->
<script>
$( function() {
  $( "#published_date" ).datepicker({
    // 用id=published_date抓取欄位
    dateFormat: "yy-mm-dd"
  })
  
} );
  // 將$( "#published_date" )動作 導入 datepicker 模組內{ 用dateFormat: "yy-mm-dd" }方式顯示

</script>

<!-- jquery 日期選擇器 結束 -->


<!-- tinymce外掛啟用 -->
<script>
tinymce.init({
selector: 'textarea',
height: 500,
menubar: false,
plugins: [
  'advlist autolink lists link image charmap print preview anchor textcolor',
  'searchreplace visualblocks code fullscreen',
  'insertdatetime media table contextmenu paste code help wordcount'
],
toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
content_css: [
  '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
  '//www.tinymce.com/css/codepen.min.css']
});

</script>
 <!-- tinymce外掛結束 -->
</body>

</html>