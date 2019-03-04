<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="login-img3-body">
  <div class="container">
    <form class="login-form" action="index.html">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" placeholder="Tên đăng nhập" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" placeholder="Mật khẩu">
        </div>
        <label class="checkbox">
            <input type="checkbox" value="remember-me"> Lưu mật khẩu
            <span class="pull-right"> <a href="#"> Quên mật khẩu?</a></span>
        </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Đăng nhập</button>
        <button class="btn btn-info btn-lg btn-block" type="submit">Đăng ký</button>
      </div>
    </form>
  </div>
</body>
</html>
