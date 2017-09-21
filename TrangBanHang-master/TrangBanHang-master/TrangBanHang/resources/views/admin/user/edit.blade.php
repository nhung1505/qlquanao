@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 panel panel-default">
                <form class="form-horizontal panel-body " enctype="multipart/form-data" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-md-4">New Passdword</label>
                        <input class="form-control" type="text" name="newpassword" >
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Re Password</label>
                        <input class="form-control" type="text"  name="repasword" >

                    <div class="text-center">
                        <input class="btn btn-success " type="submit" name="edit" value="Sửa">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
