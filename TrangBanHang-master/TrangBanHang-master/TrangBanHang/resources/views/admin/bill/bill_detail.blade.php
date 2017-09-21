@extends('admin.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h4 class="h4">Danh sách Đơn Hàng của khách hàng</h4>
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
                            <td class="text-center">{{$bill->payment}}</td>
                            <td>{{$bill->note}}</td>
                            <td>{{$bill->status}}</td>
                            <td><a href="{{route('show.bill.detail',$bill->id)}}">Chi tiết</a> </td>
                            <td><a href="{{route('show.edit.bill',$bill->id)}}">Sửa</a> </td>
                            <td><a href="{{route('show.delete.form',$bill->id)}}">Xóa</a> </td>
                        </tr>
                    @endforeach

                </table>
            </div>
            <div class="col-md-5">
                <h4 class="h4">Chi tiết đơn hàng </h4>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th class="text-center">Mã đơn hàng</th>
                        <th class="text-center">Tên sản phẩm</th>
                        <th class="text-center">Số lượng</th>
                        <th class="text-center">Giá</th>
                    </tr>
                    @foreach($bill_details as $bill_detail)
                        <tr>
                            <td class="text-center">{{  $bill_detail->bill_id}}</td>
                            <td>{{  $bill_detail->product->name}}</td>
                            <td>{{  $bill_detail->quantity}}</td>
                            <td class="text-center">{{  $bill_detail->price}}</td>
                        </tr>
                        @endforeach
                         <tr>
                            <td colspan="4" class="text-center">Tổng giá trị đơn hàng là: {{  $bill_detail->bill->total}} Đồng</td>
                         </tr>
                </table>
            </div>
            </div>
        </div>
    </div>

@endsection