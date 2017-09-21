@extends('layout.master')
@section('Noidung')

    <div class="container" id="content">
        <div class="row">

            <div class="container">
                <form action="{{route('dathang')}}" method="post" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row">@if(Session::has('thongbao')){{Session::get('thongbao')}}@endif</div>
                    <div class="row">
                        <div class="table bg-primary text-center" style=" font-size: 20px; line-height: 50px;">Đặt hàng</div>

                        <div class="col-md-6">
                    <div class="space20">&nbsp;</div>

                    <div class="form-group">
                        <label for="name" class="col-md-3 ">Họ tên</label>
                        <div class="col-md-8">
                            <input class=" form-control " type="text" name="name" placeholder="Họ tên" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 ">Giới tính </label>
                        <input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
                        <input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 10%"><span>Nữ</span>

                    </div>

                    <div class="form-group">
                        <label for="email" class="col-md-3 ">Email</label>
                        <div class="col-md-8">
                        <input class=" form-control " type="email" id="email" name="email" required placeholder="expample@gmail.com">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="adress" class="col-md-3 ">Địa chỉ</label>
                        <div class="col-md-8">
                        <input class=" form-control " type="text" id="address" name="address" placeholder="Street Address" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="phone" class="col-md-3 ">Điện thoại</label>
                        <div class="col-md-8">
                        <input class=" form-control " type="text" id="phone" name="phone" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="notes" class="col-md-3 ">Ghi chú</label>
                        <div class="col-md-8">
                        <textarea class="form-control" rows="3" id="notes" name="notes"></textarea>
                        </div>
                    </div>
                </div>
                         <div class="col-md-6">
                        <div class="table-bordered">
                            <div class="table bg-success text-center" style="height: 50px; font-size: 20px; line-height: 50px;">Đơn hàng của bạn</div>

                            <div class="your-order-body" style="padding: 0px 10px">
                                <div class="your-order-item">
                                    <div>
                                    @if(Session::has('cart'))
                                        @foreach($product_cart as $cart)
                                            <!--  one item	 -->
                                                <div class="media">
                                                    <div class="col-md-2">
                                                        <div class="row">
                                                            <img src="/images/{{$cart['item']['image']}}" class="img-responsive" width="100%">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="font-large">{{$cart['item']['name']}}</p>
                                                        <span>Đơn giá: {{number_format($cart['item']['price'])}} đồng</span><br>
                                                        <span class="color-gray your-order-info">Số lượng: {{$cart['qty']}} cái</span>
                                                    </div>
                                                </div>
                                            <hr>
                                                <!-- end one item -->
                                            @endforeach
                                        @endif
                                    </div>
                                    <div></div>
                                </div>
                                <div class="your-order-item">
                                    <div ><p class=" table bg-primary text-center" style="line-height: 50px">Tổng tiền:
                                    <span>@if(Session::has('cart')){{number_format($totalPrice)}}@else 0 @endif đồng</span>
                                    </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                             <hr>
                             <div class="table-bordered">
                             <div class="table bg-success text-center" style="height: 50px; font-size: 20px; line-height: 50px;">Hình thức thanh toán</div>
                             <div class="your-order-body">
                                <ul class="payment_methods methods" style="list-style: none">
                                    <li class="payment_method_bacs">
                                        <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="">
                                        <label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
                                        <div class="payment_box payment_method_bacs" style="display: block;">
                                            Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
                                        </div>
                                    </li>

                                    <li class="payment_method_cheque">
                                        <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
                                        <label for="payment_method_cheque">Chuyển khoản </label>
                                        <div class="payment_box payment_method_cheque" style="display: block;">
                                            Chuyển tiền đến tài khoản sau:
                                            <br>- Số tài khoản: 0101001140166
                                            <br>- Chủ TK: Phan Văn Châu
                                            <br>- Ngân hàng VCB, Chi nhánh Hà Nội
                                        </div>
                                    </li>

                                </ul>
                            </div>
                                 <div class="text-center">
                                     <button type="submit" class="btn btn-success" href="#">Đặt hàng </button>
                                 </div>
                             </div>

                        </div> <!-- .your-order -->
                    </div>

                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
@endsection


