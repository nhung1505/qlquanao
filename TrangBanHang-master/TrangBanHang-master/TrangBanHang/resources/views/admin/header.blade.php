<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css">
    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <title>Quản trị</title>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Phone@3CT</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('show.index')}}">Trang chủ</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Loại sản phẩm <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('show.list.type')}}">Danh sách</a></li>
                        <li class="divider"></li>
                        <li><a href="{{route('show.add.type')}}">Thêm loại sản phẩm</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('show.list.product')}}">Danh sách</a></li>
                        <li class="divider"></li>
                        <li><a href="{{route('show.add.product')}}">Thêm sản phẩm</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Khách hàng<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('show.list.customer')}}">Danh sách</a></li>
                        <li class="divider"></li>
                        <li><a href="{{route('show.list.bill')}}">Đơn Hàng</a></li>
                    </ul>
                </li>
                <li><a href="{{route('show.list.user')}}">Tài khoản</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->full_name}} &nbsp;<span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('logout.admin')}}">Logout</a></li>
                        <li class="divider"></li>
                        <li><a href="{{route('edit.password',Auth::user()->id)}}">Đổi mật khẩu</a></li>

                    </ul>

                </li>
            </ul>
        </div>
    </div>
</nav>