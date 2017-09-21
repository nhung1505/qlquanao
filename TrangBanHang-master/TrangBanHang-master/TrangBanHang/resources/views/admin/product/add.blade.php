@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
           <div class="col-md-6 col-md-offset-3 panel panel-default">
               <form class="form-horizontal panel-body " enctype="multipart/form-data" method="post">
                   {{csrf_field()}}
                   <div class="form-group">
                       <label>Loại sản phẩm</label>
                       <select name="type">
                           @foreach($categories as $category)
                               <option value="{{$category->id}}">{{$category->name}}</option>
                           @endforeach
                       </select>
                   </div>
                   <div class="form-group">
                       <label class="col-md-4">Tên sản phẩm</label>
                       <input class="form-control" type="text" name="name">
                   </div>
                   <div class="form-group">
                       <label class="col-md-4">Giá</label>
                       <input class="form-control" type="text" name="price">
                   </div>
                   <div class="form-group">
                       <label class="col-md-4">Mới</label>
                       <input class="form-control" type="text" name="new" placeholder="0 or 1">
                   </div>
                   <div class="form-group">
                       <label class="col-md-4">Hình ảnh</label>
                       <input class="" type="file" name="image">
                   </div>
                   <div class="form-group">
                       <label class="col-md-4">Đơn vị</label>
                       <input class="form-control" type="text" name="unit">
                   </div>
                   <div class="form-group">
                       <label class="col-md-4">Mô tả</label>
                       <textarea class="form-control" name="description" cols="40" rows="20"></textarea>
                   </div>
                   <input class="btn btn-success" type="submit" name="add" value="Thêm">
               </form>
           </div>
        </div>
    </div>
@endsection