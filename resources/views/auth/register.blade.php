@extends('app')

<head>
<title>Monitor | Register</title>
<!-- Tell the browser to be responsive to screen width -->
<meta
    content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
    name="viewport">

<!-- custom css -->
<link rel="stylesheet" href="{{ URL::asset('dist/css/custom.css')}}">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-custom register-page">
@section('content')

<div class="register-box">
      <div class="register-logo">
        <b>Site</b>Monitor
      </div>
            <div class="register-box-body">
                 <p class="login-box-msg">Register a new account</p>

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br>
                        <br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="register">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                                <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="First Name">
                        </div>

                        <div class="form-group">
                                <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name">
                        </div>

                        <div class="form-group">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address">
                        </div>

                        <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>

                        <div class="form-group">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
