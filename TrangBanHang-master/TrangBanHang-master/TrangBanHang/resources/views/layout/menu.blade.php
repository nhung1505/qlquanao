<nav class="navbar navbar-inverse menu">
    <div class="container">
        <div class="navbar-header">
            <div class="col-xs-10 visible-xs">
                <form class=" navbar-left">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=" col-xs-2 ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav menu ">
                <li class=""><a href="{{route('trang-chu')}}" >Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li class="dropdown ">
                    <a class="dropdown-toggle " data-toggle="dropdown" href="#">Danh mục sản phẩm <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @foreach($loaisp as $loai)
                        <li><a href="{{route('chitiet_loaisp',$loai->id)}}">{{$loai->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="#">Liên hệ</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle " data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Giỏ hàng ({{Session::has('cart')?Session('cart')->totalQty:  'Trống'}})</a>
                    <ul class="dropdown-menu">
                        @if(Session::has('cart'))
                            @foreach($product_cart as $product)
                        <li style="height: 100px;">
                            <div class="col-md-3">
                                <div class="row">
                                <img src="/images/{{$product['item']['image']}}" class="img-responsive" width="100%">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <span class="height">{{$product['item']['name']}}</span><br>
                                Price:<span  class="cart-item-amount">{{$product['qty']}}*<span> <span class="gia"> {{$product['item']['price']}}</span><br>
                                    </span>
                                </span>
                                <div class="text-right">
                                    <a href="{{route('xoagiohang',$product['item']['id'])}}"><span class="btn btn-danger" > xóa</span></a>
                                </div>

                            </div>

                        </li>
                            @endforeach
                        @endif
                        <li>
                        <div>Tổng tiền: <span class="btn btn-info">{{Session::has('cart')? Session::get('cart')->totalPrice: 0}} đồng</span></div>
                        </li>
                        <li><a href="{{route('dathang')}}" class="text-center"><span class="btn btn-success">Tiến hành đặt hàng</span></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    @if(Auth::check())
                    <a href="#" class="dropdown-toggle " data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {{Auth::user()->full_name}}</a>
                     <li><a href="{{route('logout')}}">Đăng xuất</a></li>
                    <ul class="dropdown-menu">
                        @else
                            <li><a href="{{route('signin')}}">Đăng kí</a></li>
                            <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>