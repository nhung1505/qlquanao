@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4 class="h4">Danh sách thể loại</h4>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Thứ tự</th>
                        <th>Tên loại</th>
                    </tr>
                    @foreach($categories as $index=>$category )
                        <tr>
                            <td class="text-center">{{++$index}}</td>
                            <td><a href="{{route('show.list.product.by.type',$category->id)}}">{{$category->name}}</a> </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-md-9">
                <h4 class="h4">Sản phẩm của {{$cate_by_id->name}}</h4>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th class="text-center">Thứ tự</th>
                        <th class="text-center">Tên sản phẩm</th>
                        <th class="text-center">Giá</th>
                        <th class="text-center">Hình ảnh</th>
                        <th class="text-center">Mô tả</th>
                        <th class="text-center">Mới</th>
                        <th class="text-center">Sửa</th>
                        <th class="text-center">Xóa</th>
                    </tr>
                    @foreach($products as $key=>$product)
                        <tr>
                            <td class="text-center">{{++$key}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td class="text-center"><img src="/images/{{$product->image}}" style="width: 50px; height: 80px"></td>
                            <td>{{$product->description}}</td>
                            <td class="text-center">{{$product->new}}</td>
                            <td>
                                <a href="{{route('show.edit.product',$product->id)}}"><i class="glyphicon glyphicon-edit"></i> Sửa</a>
                            </td>
                            <td>
                                <a href="{{route('show.delete.product',$product->id)}}"><i class="glyphicon glyphicon-trash"></i> Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection