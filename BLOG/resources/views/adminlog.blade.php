<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Admin Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('admin/adminlog/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/adminlog/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/adminlog/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/adminlog/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/adminlog/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/adminlog/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/adminlog/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/adminlog/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/adminlog/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/adminlog/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/adminlog/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>
<div class="limiter">
    <div class="container-login100" style="background-image: url({{asset('admin/adminlog/images/bg-01.jpg')}});">
        <div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Admin Giriş Ekranı
				</span>
            <div class="alert alert-danger" role="alert" id="error_div">
                @foreach($errors->all() as $error)

                    <li>{{$error}}</li>


                @endforeach
            </div>
            <form method="post" action="{{route('adminPass')}}" class="login100-form validate-form p-b-33 p-t-5">
                @csrf
                <div class="wrap-input100 validate-input" data-validate = "email">
                    <input class="input100" type="email" name="email" placeholder="Email">
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="password">
                    <input class="input100" type="password" name="password" placeholder="şifre">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>

                <div class="container-login100-form-btn m-t-32">
                    <button class="login100-form-btn">
                        Giriş Yap
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{asset('admin/adminlog/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('admin/adminlog/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('admin/adminlog/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('admin/adminlog/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('admin/adminlog/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('admin/adminlog/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('admin/adminlog/vendor/daterangepicker/moment.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('admin/adminlog/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('admin/adminlog/js/main.js')}}"></script>

</body>
</html>
