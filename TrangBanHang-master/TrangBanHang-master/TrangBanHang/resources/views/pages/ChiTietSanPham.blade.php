
@extends('layout.master')

@section('Noidung')

<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <div>
                <ul class="breadcrumb">
                    <li>Trang chủ</li>
                    <li>{{$category->name}}</li>
                    <li class="active">Sản phẩm {{$products->name}}</li>
                </ul>
            </div>
            <div class="col-md-5 col-xs-12" id="imageproduct">
                <ul class="bxslider">
                    <li><img src="/images/{{$products->image}}" class="img-responsive"></li>
                    <li><img src="/images/{{$products->image}}" class="img-responsive"></li>
                    <li><img src="/images/{{$products->image}}" class="img-responsive"></li>
                </ul>
            </div>
            <div class="col-md-7" id="product">
                <p id="productname"><b>Sản phẩm {{$products->name}}B</b></p>
                <hr>
                <pre>Giá bán: <p id="price">18.990.000 VND</p></pre>
                <p>Thương hiệu: {{$category->name}}</p>
                <p>Tình trạng: Còn hàng</p>
                <p><b>Mô tả</b>: Cuối cùng, Apple đã chính thức ra mắt bộ đôi iPhone 7 và iPhone 7 Plus chấm dứt
                    những đồn đoán kéo dài nhiều tháng qua. Cả thiết kế lẫn cấu hình của cả hai sản phẩm iPhone mới
                    đều không khác nhiều so với những thông tin...</p>
                <div id="productcolor">
                    <img src="/images/colorproduct_white.png">
                    <img src="/images/colorproduct_grey.png">
                    <img src="/images/colorproduct_pink.png">
                    <img src="/images/colorproduct_yellow.png">
                </div>
                <div id="buy">
                    <hr>
                    <div id="buttonbuy"><button type="button" class="btn btn-success" id="bought"><a href="{{route('themgiohang',$products->id)}}">Mua ngay</a></button></div>
                    <div id="buttoncredit"><button type="button" class="btn btn-warning" id="credit">Trả góp</button></div>
                </div>
                <div id="bill">
                    <hr>
                    <div id="phuongthucthanhtoan"><p><b>Chấp nhận thanh toán : </b></p></div>
                    <div class="donvithanhtoan">
                        <img src="/images/logo_baokim.jpg" class="img-responsive">
                    </div>
                    <div class="donvithanhtoan">
                        <img src="/images/logo_vietcombank.png" class="img-responsive">
                    </div>
                    <div class="donvithanhtoan">
                        <img src="/images/logo_baokim.jpg" class="img-responsive">
                    </div>
                </div>
            </div>
            <div id="tab">
                <div class="row">
                    <h2 class="text-center">Những đặc điểm nổi bật</h2>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">Thông tin</a></li>
                        <li><a href="#info" data-toggle="tab">Thông số kỹ thuật</a></li>
                        <li><a href="#contact" data-toggle="tab">Đánh giá</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <p><b>{{$products->name}}</b></p>
                        </div>
                        <div class="tab-pane" id="info">
                            <p>Thông số kỹ thuật</p><br>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Chức năng - Bộ phận</th>
                                        <th>Thông số</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="">
                                        <td>Màn hình</td>
                                        <td>LED-backlit IPS LCD</td>
                                    </tr>
                                    <tr class="">
                                        <td>Độ phân giải</td>
                                        <td>4.7' HD (1334 x 750 Pixels)</td>
                                    </tr>
                                    <tr class="">
                                        <td>Camera</td>
                                        <td>Sau: 12MP + Trước: 8MP</td>
                                    </tr>
                                    <tr class="">
                                        <td>Hệ điều hành</td>
                                        <td>IOS 10</td>
                                    </tr>
                                    <tr class="">
                                        <td>Chip</td>
                                        <td>Apple A10 Fusion 4 nhân 64-bit</td>
                                    </tr>
                                    <tr class="">
                                        <td>RAM</td>
                                        <td>2GB</td>
                                    </tr>
                                    <tr class="">
                                        <td>Bộ nhớ</td>
                                        <td>32 GB không thẻ nhớ</td>
                                    </tr>
                                    <tr class="">
                                        <td>Kết nối</td>
                                        <td>3G, 4G, LTE</td>
                                    </tr>
                                    <tr class="">
                                        <td>Sim</td>
                                        <td>1 Nano sim</td>
                                    </tr>
                                    <tr class="">
                                        <td>Pin</td>
                                        <td>Lion 1960mAh</td>
                                    </tr>
                                    <tr class="">
                                        <td>Trọng lượng</td>
                                        <td>138 g - Dài 138.3 mm - Ngang 67.1 mm - Dày 7.1 mm</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="contact">
                            Đánh Giá:

                            Tạm thời chưa có đánh giá nào!!!!!!!!!
                        </div>
                    </div>
                </div>
            </div>
            <div class="fb-comments" data-href="http://webbanhang.dev:8088" data-width="100%" data-numposts="5"></div>
        </div>
    </div>
</div>
@endsection




