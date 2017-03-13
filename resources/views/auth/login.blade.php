@extends('app')

<head>
<title>SpinThatDisc | Login</title>
<!-- Tell the browser to be responsive to screen width -->
<meta
 content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
    name="viewport">

<!-- iCheck -->
<link rel="stylesheet" href="{{ URL::asset('plugins/iCheck/square/blue.css')}}">
<!-- custom css -->
<link rel="stylesheet" href="{{ URL::asset('dist/css/custom.css')}}">

<style>
html, body {
    min-height: auto !important;
}
</style>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-custom login-page">
@section('content')
    <div class="login-box">
        <div class="login-logo">
            <b>Spin That Disc</b>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }}
	                @endforeach
            </div>
            @endif

            <p class="login-box-msg">Sign in to start your session</p>
            <form method="POST" action="{{ url('login') }}">

                {!! csrf_field() !!}

                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email"
                        name="email" value="{{ old('email') }}"> <span
                        class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password"
                        name="password"> <span
                        class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div>
                            <input type="checkbox" name="remember"> Remember Me
                    </div>

                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="loginLinks">
                <a href="{{ url('password/email') }}" class="pull-left">I forgot my password</a>
                <a href="{{ url('register') }}" class="pull-right">Register a new account</a>
            </div>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- iCheck -->
    <script src="{{ URL::asset('plugins/jQuery/jquery-1.12.0.min.js')}}"></script>
    <script src="{{ URL::asset('plugins/iCheck/icheck.min.js')}}"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%'
        });
      });
    </script>
</html>
@endsection
