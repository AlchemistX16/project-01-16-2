<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Boonyuarn Bar & Restaurant </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('backend/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('backend/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('backend/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('backend/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('backend/images/favicon.ico')}}" />
</head>

<body>
  @include('sweetalert::alert')
  <div class="container-scroller">
    <!--navbar-->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="{{asset('backend/images/logo.png')}}" class="mr-2"
            alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('backend/images/logo-mini.png')}}" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <!--profile-->
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{asset('backend/images/profile.png')}}" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="{{route('profile.edit')}}">
                    <i class="icon-head menu-icon text-primary"></i>
                    Profile
                    </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item" href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                    <i class="ti-power-off text-primary"></i>
                    Logout
                    </a>
                </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>

    <!-- UI  -->
    <div class="container-fluid page-body-wrapper">
      <div class="theme-setting-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
            aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
              </form>
            </div>
          </div>
        </div>
      </div>
    
      <!--Dashboard UI-->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard')}}" class="menu-link">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <!--user UI-->
          <li class="nav-item" id="user">
            <a class="nav-link" href="{{ route('u.index')}}">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User</span>
            </a>
          </li>

          <!-- Product UI-->
          <li class="nav-item" id="product">
            <a class="nav-link" href="{{ route('p.index')}}" class="menu-link" aria-expanded="false" aria-controls="product">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Product</span>
            </a>
          </li>

          <!-- Category UI-->
          <li class="nav-item" id="category"> 
            <a class="nav-link" href="{{ route('c.index')}} "class="menu-link" aria-expanded="false" aria-controls="category">
              <i class="icon-menu menu-icon "></i>
              <span class="menu-title">Category</span>
            </a>
          </li>

        </ul>
      </nav>
      <!--content-->
      @yield('con')


      <!-- plugins:js -->
      <script src="{{asset('backend/vendors/js/vendor.bundle.base.js')}}"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="{{asset('backend/vendors/chart.js/Chart.min.js')}}"></script>
      <script src="{{asset('backend/vendors/datatables.net/jquery.dataTables.js')}}"></script>
      <script src="{{asset('backend/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
      <script src="{{asset('backend/js/dataTables.select.min.js')}}"></script>

      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="{{asset('backend/js/off-canvas.js')}}"></script>
      <script src="{{asset('backend/js/hoverable-collapse.js')}}"></script>
      <script src="{{asset('backend/js/template.js')}}"></script>
      <script src="{{asset('backend/js/settings.js')}}"></script>
      <script src="{{asset('backend/js/todolist.js')}}"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src="{{asset('backend/js/dashboard.js')}}"></script>
      <script src="{{asset('backend/js/Chart.roundedBarCharts.js')}}"></script>
      <!-- End custom js for this page-->
</body>

</html>