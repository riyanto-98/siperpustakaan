<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Home</a>
        </li>
    </ul>

    <!--search-->
   
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
     

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="d-block" href="#">
                    <i class="far fa-envelope" ></i>
                </a>
    
                <form id="logout-form" action="#"
                        method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="d-block" href="#"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                <i class="fas fa-power-off"></i>
            </a>

            <form id="logout-form" action="#"
                    method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

    
</nav>
<!-- /.navbar -->
