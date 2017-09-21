@extends('layout.master')
@section('Noidung')
    <div class="container">
        <div id="content">

            <form action="{{route('login')}}" method="post" class="form-horizontal col-md-12">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row">
                    <div class="col-sm-3"></div>
                    @if(Session::has('flag'))
                        <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                    @endif
                    <div class="col-sm-6">
                        <div class="table bg-primary text-center" style=" font-size: 20px; line-height: 50px;">Đăng Nhập</div>
                        <div class="space20">&nbsp;</div>


                        <div class="form-group">
                            <label class="col-md-4" for="email">Email address (*)</label>
                            <div class="col-md-8">
                            <input class="form-control" type="email" name="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4" for="phone">Password (*)</label>
                            <div class="col-md-8">
                            <input class="form-control" type="password" name="password" required>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </form>
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection