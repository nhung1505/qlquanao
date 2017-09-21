@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 panel panel-default">
                <form class="form-horizontal panel-body " enctype="multipart/form-data" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-md-3">Loại sản phẩm</label>
                        <select name="type">
                            @foreach($types as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Tên sản phẩm</label>
                        <input class="form-control" type="text" value="{{$product->name}}" name="nameproduct">
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Giá</label>
                        <input class="form-control" type="text" value="{{$product->price}}" name="price">
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Mới</label>
                        <input class="form-control" type="text" value="{{$product->new}}" name="new" placeholder="0 or 1">
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Hình ảnh</label>
                        <input class="" type="file"  name="image">
                        <img src="/storage/images/{{$product->image}}" style="height: 100px; width: 80px">
                        <input type="text" readonly  value="{{$product->image}}" name="img" >
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Đơn vị</label>
                        <input class="form-control" type="text" value="{{$product->unit}}" name="unit">
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Mô tả</label>
                        <textarea class="form-control" rows="20" cols="10">{{$product->description}}</textarea>
                        {{--<input class="form-control" type="text" name="description" value="{{$product->description}}">--}}
                    </div>
                    <div class="text-center">
                        <input class="btn btn-success " type="submit" name="edit" value="Sửa">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
