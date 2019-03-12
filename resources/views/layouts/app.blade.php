<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body class="app sidebar-mini rtl">
  <div id="app">
    <!-- Navbar-->
    <header class="app-header"><router-link to="/" class="app-header__logo">Rượu Rượu</router-link>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown">
          <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="#"><i class="fa fa-cog fa-lg"></i> Cài đặt</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa fa-user fa-lg"></i> Thông tin cá nhân</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa fa-sign-out fa-lg"></i> Đăng xuất</a></li>
          </ul>
        </li>
      </ul>
    </header>

    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">PhuHeo</p>
          <p class="app-sidebar__user-designation">Nhân Viên</p>
        </div>
      </div>
      <ul class="app-menu">
        <li>
            <input class="app-menu__item fa fa-dashboard" type="search" placeholder="Tìm kiếm"  style="margin-left: 10px" v-model="search" aria-label="Search" @keyup="Timkiem">
        </li>
        <li>
          <router-link to="/" class="app-menu__item">
            <i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Trang chủ</span>
          </router-link>
        </li>
        
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Loại rượu</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <phanloaimenu></phanloaimenu>
        </li>
        
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Nhà cung cấp</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <nhacungcapmenu></nhacungcapmenu>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Nhà sản xuất</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <nhasanxuatmenu></nhasanxuatmenu>
        </li>
         
        <li>
          <router-link to="/checkout" class="app-menu__item">
            <i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Giỏ hàng</span>
          </router-link>
        </li>

        <li>
          <router-link to="/" class="app-menu__item">
            <i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Thống kê</span>
          </router-link>
        </li>

        <li>
          <router-link to="/" class="app-menu__item">
            <i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Địa chỉ</span>
          </router-link>
        </li>
      </ul>
    </aside>

    {{-- main content --}}
    <main class="app-content">
      {{-- @yield('content') --}}
      <router-view :key="$route.fullPath"></router-view>
    </main>
    {{-- end content --}}
  </div>

  <!-- Essential javascripts for application to work-->
  <script src="{{asset('theme/js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('theme/js/popper.min.js')}}"></script>
  <script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="{{asset('theme/js/plugins/pace.min.js')}}"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{asset('theme/js/main.js')}}" defer></script>
</body>
</html>
