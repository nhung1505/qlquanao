@extends('layout.master')

@section('Noidung')
    <div class="container">
        <div class="row">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <a href="#"><img src="{{asset('/images/home-slider-1.jpg')}}" alt="Image" width="100%"></a>
                    </div>
                    @foreach($slides as $sl)
                        <div class="item ">

                            <a href="#"><img src="/images/{{$sl->image}}" alt="Image" width="100%"></a>

                        </div>
                    @endforeach
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="container" >
        <div class="row khung"  >

            <div class="col-md-3 col-sm-4">
                <div class="row">

                    <ul class="list-group " >
                        <li class="list-group-item tieude ">
                            <span class="glyphicon glyphicon-list">&nbsp;</span>
                            <span class="text-center">Danh mục sản phẩm</span>
                        </li>
                        @foreach($categories as $loai)
                        <li class="list-group-item ds ">
                            <span class="glyphicon glyphicon-phone ">&nbsp;</span>
                            <a href="{{route('chitiet_loaisp',$loai->id )}}" class="red_hover" >{{$loai->name}}</a>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-sm-8">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Sản phẩm bán chạy</h3><hr class="gach_full">
                    </div>
                </div>

                <div class="row">
                    @foreach($hotProducts as $product)
                    <div class="col-md-6 col-s  m-6">
                        <div class="row">
                            <div class="col-md-6 col-xs-6 col-sm-6">
                                <a href="{{route('chitietsanpham',$product->id)}}">
                                    <img class="img-responsive img-thumbnail" src="images/{{$product->image}}" width="100%">
                                </a>

                            </div>
                            <div class="col-md-6 text-center col-xs-6 col-sm-6">
                                <div class="height">
                                    <span ><strong><a class="red_hover" href="{{route('chitietsanpham',$product->id)}}">{{$product->name}}</a></strong></span>
                                </div>
                                <div >
                                    <p><span> Giá: &nbsp; </span><span class="gia">{{$product->price}}</span></p>
                                </div>
                                <div class="caption">
                                    <a href="{{route('themgiohang',$product->id)}}"><span class="glyphicon glyphicon-shopping-cart" style="color:red; padding-right: 10px"></span></a>
                                    <a href="{{route('themgiohang',$product->id)}}" class="select"> Mua hàng</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
            <div class="col-md-3 visible-lg visible-md">
                <div class="row">
                    <img src="images/home-banner-right.jpg" class="img-responsive" width="85%">
                </div>
            </div>
        </div>
        <hr>
        <div class="row khung">
            <div class="row">
                <div class="col-md-3">
                    <h3>Sản phẩm mới nhất</h3><hr class="gach_full">
                </div>
            </div>
            <div class="row khungnho">
                @foreach($newProducts as $newProduct)
                <div class="col-md-2 col-xs-6 col-sm-3">
                    <a href="{{route('chitietsanpham',$newProduct->id)}}">
                        <img class="img-responsive img-thumbnail" src="/images/{{$newProduct->image}}" width="100%">
                    </a>
                    <div class="caption text-center height">
                        <span ><strong><a class="red_hover" href="{{route('chitietsanpham',$newProduct->id)}}">{{$newProduct->name}}</a></strong></span>
                    </div>
                    <div class="height text-center">
                        <p><span> Giá: &nbsp; </span><span class="gia">{{$newProduct->price}} đồng</span></p>
                        <a href="{{route('themgiohang',$newProduct->id)}}"><span class="glyphicon glyphicon-shopping-cart" style="color:red; padding-right: 10px"></span></a>
                        <a href="{{route('themgiohang',$newProduct->id)}}" class="select"> Mua hàng</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row text-center"> {{$newProducts->links()}}</div>
        </div>
        <hr>
        <div class="row khung">
            @foreach($categories->take(3) as $type)
            <div class="col-md-4 col-sm-4 col-xs-12">
                <h3 class="text-center">{{$type->name}}</h3><hr class="gach_duoi">
                @foreach($type->products->take(3) as $product)
                <div class="row">
                    <div class="col-md-4 col-xs-6 text-center">
                        <a href="{{route('chitietsanpham',$product->id)}}">
                            <img class="img-responsive img-thumbnail" src="images/{{$product->image}}" width="100%">
                        </a>
                    </div>
                    <div class="col-md-6 text-center col-xs-6">
                        <div class="height">
                        <span ><strong><a class="red_hover" href="{{route('chitietsanpham',$product->id)}}">{{$product->name}}</a></strong></span>
                        </div >
                        <p><span> Giá: &nbsp; </span><span class="gia">{{$product->price}} đ</span></p>
                        <div class="caption">
                            <a href="{{route('themgiohang',$newProduct->id)}}"><span class="glyphicon glyphicon-shopping-cart" style="color:red; padding-right: 10px"></span></a>
                            <a href="{{route('themgiohang',$newProduct->id)}}" class="select"> Mua hàng</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            @endforeach

        </div>
    </div>

@endsection