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
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone_number</th>
                        <th>Note</th>
                        <th>Quản lý</th>
                    </tr>
                    @foreach($customers as $index=>$customer)
                        <tr>
                            <td class="text-center">{{++$index}}</td>
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->gender}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->address}}</td>
                            <td>{{$customer->phone_number}}</td>
                            <td>{{$customer->note}}</td>
                            <td><a href="{{route('show.delete.customer',$customer->id)}}"><i class="glyphicon glyphicon-trash"></i> Xóa</a> </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

