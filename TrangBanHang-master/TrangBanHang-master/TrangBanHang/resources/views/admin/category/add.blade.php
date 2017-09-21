@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="form-group form-inline" method="post">
                    {{csrf_field()}}
                    <label>Tên loại</label>
                    <input class="form-control" type="text" name="typeproduct">
                    <input class="btn btn-danger" type="submit" value="Thêm">
                </form>
            </div>
        </div>
    </div>
@endsection
