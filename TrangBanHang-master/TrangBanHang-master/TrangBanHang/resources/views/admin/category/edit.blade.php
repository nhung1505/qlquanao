@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <form class="form-group form-inline" method="post">
                {{csrf_field()}}
                <label>Tên loại</label>
                <input class="form-control" type="text" name="typeproduct" value="{{$category->name}}">
                <input class="btn btn-danger" type="submit" name="edit" value="Sửa">
            </form>
        </div>
    </div>

@endsection