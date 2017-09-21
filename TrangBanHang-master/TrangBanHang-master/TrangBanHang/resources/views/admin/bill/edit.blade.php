@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 panel panel-default">
                <form class="form-horizontal panel-body " enctype="multipart/form-data" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-md-4">Tên khách hàng</label>
                        <input class="form-control" type="text" readonly value="{{$bill->customer->name}}">
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">note</label>
                        <input class="form-control" type="text" readonly value="{{$bill->note}}" name="new">
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Hiện trạng</label>
                        <input class="form-control" type="text" value="{{$bill->status}}" name="status">
                    </div>
                    <div class="text-center">
                        <input class="btn btn-success " type="submit" name="edit" value="Sửa">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

