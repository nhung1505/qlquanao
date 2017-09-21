@extends('admin.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4 class="h4">Danh sách Khách Hàng</h4>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Thứ tự</th>
                        <th>Tên Khách hàng</th>
                    </tr>
                    @foreach($customers as $index=>$customer )
                        <tr>
                            <td class="text-center">{{$index + 1}}</td>
                            <td><a href="{{route('show.list.by_customer',$customer->id)}}">{{$customer->name}}</a> </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-md-9">
                <h4 class="h4">Danh sách Đơn Hàng</h4>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Thứ tự</th>
                        <th class="text-center">Tên khách hàng</th>
                        <th class="text-center">Tổng giá trị</th>
                        <th class="text-center">phương thức thanh toán</th>
                        <th class="text-center">note</th>
                        <th class="text-center">Hiện trạng</th>
                        <th class="text-center">Chi tiết</th>
                        <th class="text-center">Sủa</th>
                        <th class="text-center">Xóa</th>
                    </tr>
                    @foreach($bills as $index=>$bill)
                        <tr>
                            <td class="text-center">{{++$index}}</td>
                            <td class="text-center">{{$bill->customer->name}}</td>
                            <td>{{$bill->total}}</td>
                            <td>{{$bill->payment}}</td>
                            <td>{{$bill->note}}</td>
                            <td>{{$bill->status}}</td>
                            <td><a href="{{route('show.bill.detail',$bill->id)}}">Chi tiết</a> </td>
                            <td><a href="{{route('show.edit.bill',$bill->id)}}">Sửa</a> </td>
                            <td><a href="{{route('show.delete.form',$bill->id)}}">Xóa</a> </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>

@endsection