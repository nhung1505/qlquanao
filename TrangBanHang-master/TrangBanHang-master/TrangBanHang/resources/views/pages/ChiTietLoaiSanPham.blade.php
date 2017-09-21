@extends('layout.master')
@section('Noidung')
        <div class="container content1">
            <div class="row col-md-12">
                <div class="col-md-3 col-sm-4">
                    <div class="row">

                        <ul class="list-group " >
                            <li class="list-group-item tieude ">
                                <span class="glyphicon glyphicon-list">&nbsp;</span>
                                <span class="text-center">Danh mục sản phẩm</span>
                            </li>
                            @foreach($categories as $category)
                                <li class="list-group-item ds ">
                                    <span class="glyphicon glyphicon-phone ">&nbsp;</span>
                                    <a href="{{route('chitiet_loaisp',$category->id )}}" class="red_hover" >{{$category->name}}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-1 content1-right">
                    <div class="row">
                        <div class="col-md-4">
                               <h3>{{$cate->name}}</h3><hr class="gach_full">
                        </div>
                    </div>
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-6 col-xs-6  col-sm-6">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6 col-sm-6">
                                        <a href="{{route('chitietsanpham',$product->id)}}">
                                        <img class="img-responsive img-thumbnail" src="/images/{{$product->image}}" width="100%">
                                        </a>
                                    </div>
                                    <div class="col-md-6 text-center col-xs-6 col-sm-6">
                                        <div class="height">
                                            <span ><strong><a class="red_hover" href="{{route('chitietsanpham',$product->id)}}">{{$product->name}}</a></strong></span>
                                        </div>
                                        <div >
                                            <p><span> Giá: &nbsp; </span><span class="gia">{{$product->price}}</span></p>
                                        </div>
                                        <a href="{{route('themgiohang',$product->id)}}"><span class="glyphicon glyphicon-shopping-cart" style="color:red; padding-right: 10px"></span></a>
                                        <a href="{{route('themgiohang',$product->id)}}" class="select"> Mua hàng</a>


                                    </div>
                                </div>
                            </div>

                        @endforeach



                    </div>

                </div>
            </div>
        </div>
    @endsection
