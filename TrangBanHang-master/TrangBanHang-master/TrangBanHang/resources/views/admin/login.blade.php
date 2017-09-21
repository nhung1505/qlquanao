<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css">
    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <title>Quản trị</title>
</head>
<BODY>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 panel panel-default">
                <form class="form-horizontal panel-body " method="post">
                    {{csrf_field()}}
                    <h4 class="text-center">LOGIN ADMIN</h4>
                    <div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="col-md-2">Email</label>
                        <input class="form-control" type="text" name="email">
                    </div>
                    <div class="form-group">
                        <label class="col-md-2">Password</label>
                        <input class="form-control" type="password" name="password">
                    </div>
                    <input class="btn btn-success" type="submit" name="login" value="Login">
                </form>
            </div>
        </div>
    </div>

</BODY>