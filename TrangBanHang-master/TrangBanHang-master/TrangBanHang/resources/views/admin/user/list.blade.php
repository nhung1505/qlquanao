@extends('admin.master');
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Thứ tự</th>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Adress</th>
                        <th>Xử lý</th>
                    </tr>
                    @foreach($users as $index=>$user)
                        <tr>
                            <td class="text-center">{{++$index}}</td>
                            <td>{{$user->id}}</td>
                            <td>{{$user->full_name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->address}}</td>
                            <td><a href="{{route('show.delete',$user->id)}}"><i class="glyphicon glyphicon-trash"></i> Xóa</a> </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
@endsection