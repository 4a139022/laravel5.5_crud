
<nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="../console/console.php">
      <i class="fa fa-glass"></i> 每朝一多 </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
       
            <li class="nav-item dropdown" >
            <a class="nav-link "  href="../console/console.php"   >主控台</a>
            <!-- <div class="dropdown-menu" aria-labe lledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="../customer_orders/list.php?status=0">最新消息</a>
              <a class="dropdown-item" href="../customer_orders/list.php?status=1">會員活動</a>
            </div> -->
          </li>
        <li class="nav-item dropdown" >
            <a class="nav-link "  href="{{ route('news.index')}}"   >消息管理</a>
            <!-- <div class="dropdown-menu" aria-labe lledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="">最新消息</a>
              <a class="dropdown-item" href="">會員活動</a>
            </div> -->
          </li>

          
          <li class="nav-item dropdown" >
          <a class="nav-link "  href="{{ route('pages.index')}}"   >頁面管理</a>
            <!-- <div class="dropdown-menu" aria-labe lledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="">關於我們</a>
              <a class="dropdown-item" href="">聯絡我們</a>
            </div> -->
          </li>
          <li class="nav-item dropdown" >
            <a class="nav-link " href="{{ route('members.index')}}"   >會員管理</a>
            <!-- <div class="dropdown-menu" aria-labe lledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="">新訂單</a>
              <a class="dropdown-item" href="">已付款</a>
            </div> -->
          </li>
          <li class="nav-item dropdown" >
            <a class="nav-link "  id="navbarDropdownMenuLink" href="{{ route('product_categories.index')}}"  >產品管理</a>
            <!-- <div class="dropdown-menu" aria-labe lledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="">第一類</a>
              <a class="dropdown-item" href="">第二類</a>
            </div> -->
            </li>
            <li class="nav-item dropdown" >
            <a class="nav-link "  id="navbarDropdownMenuLink" href=""  >訂單管理</a>
            <!-- <div class="dropdown-menu" aria-labe lledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="">第一類</a>
              <a class="dropdown-item" href="">第二類</a>
            </div> -->
            </li>
        
        </ul>
        <a class="btn navbar-btn ml-2 text-white btn-secondary" href="../checkuser.php">
          <i class="fa d-inline fa-lg fa-user-circle-o"></i>&nbsp;登出</a>
      </div>
    </div>
  </nav>
