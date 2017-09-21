@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row text-center">
            <h4 class="h4 ">Bạn có chắc muốn xóa: <strong>{{$bill->name}}</strong></h4>
            <form method="post">
                {{csrf_field()}}
                <input class="btn btn-danger" type="submit" name="delete" value="Xoá">
            </form>
        </div>
    </div>
@endsection