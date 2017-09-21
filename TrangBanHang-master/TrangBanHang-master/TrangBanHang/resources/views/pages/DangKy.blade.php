@extends('layout.master')
@section('Noidung')
    <div class="container">
        <div id="content">

            <form action="{{route('signin')}}" method="post" class="form-horizontal col-md-12">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row">
                    <div class="row"></div>
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}
                            @endforeach
                        </div>
                    @endif
                    @if(Session::has('thanhcong'))
                        <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                    @endif
                    <div class="col-md-8 ">
                        <div class="table bg-primary text-center" style=" font-size: 20px; line-height: 50px;">Đăng ký</div>
                        <div class="space20">&nbsp;</div>


                        <div class="form-group">
                            <label for="email" class="col-md-3">Email address*</label>
                            <div class="col-md-9">
                            <input class="form-control" type="email" name="email" placeholder="abc@gmail.com" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="your_last_name" class="col-md-3">Fullname*</label>
                            <div class="col-md-9">
                            <input class="form-control type="text name="fullname" required>
                            </div>
                        </div>

                        <div class="form-group" >
                            <label for="adress" class="col-md-3">Address*</label>
                            <div class="col-md-9">
                            <input class="form-control type="text name="address" placeholder="Street Address" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="phone" class="col-md-3">Phone*</label>
                            <div class="col-md-9">
                            <input class="form-control type="text name="phone" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-md-3">Password*</label>
                            <div class="col-md-9">
                            <input class="form-control type="password name="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-md-3">Re password*</label>
                            <div class="col-md-9">
                            <input class="form-control type="password name="re_password" required>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </form>
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection