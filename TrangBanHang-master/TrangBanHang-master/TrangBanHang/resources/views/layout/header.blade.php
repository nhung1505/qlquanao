<div class="container-fluid banner">
    <div class="container ">
        <div class="row ">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="row khung">
                    <img class="img-responsive" src="{{asset('/images/logo.png')}}" >
                </div>
            </div>
            <div class="col-md-6 col-sm-6 khung hidden-xs ">
                <div class="search-box " >
                    <form class="search-form" action="{{route('search')}}" method="get">
                        <div class="col-md-10 col-sm-9">
                            <input class="form-control" name="key" placeholder="tìm kiếm" type="text">
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <button class="btn btn-link search-btn" > <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 khung">
                <span class="fa fa-phone">Hotline:<a href="#" style="color: red" class="red_hover" >01687479508</a></span><br>
                <span class="fa fa-home">email:<a><i> phanchaudhv@gmail.com</i></a></span><br>
               <div class="fb-like" data-href="http://webbanhang.dev:8088" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
            </div>
        </div>
    </div>
</div>