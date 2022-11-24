<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('public/img/doh.png') }}">
    <title>Adminmart Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="{{ asset('public/dist/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/dist/customstyle.css') }}" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url({{ asset('public/assets/images/big/auth-bg.jpg')}}) no-repeat center center;">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5" style="background: white;">
                    <h2 class="customtitle">E-VOUCHER SYSTEM</h2>
                    <div class="text-center">
                        <img class="loginimg" src="{{ asset('public/img/doh.png') }}" alt="wrapkit">
                    </div>
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <h2 class="mt-3">SIGN IN</h2>
                        <form class="mt-4" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-12">
                                    <span class="help-block">
                                        @error('username')
                                            <strong style="color: #A52A2A;">{{ $message }} sad</strong>
                                        @enderror
                                    </span>
                                    <div class="form-group">
                                        <label class="text-dark" for="uname">USERNAME</label>
                                        <input class="form-control" id="uname" type="text" name="username" 
                                            placeholder="Enter your username" autofocus required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="pwd">PASSWORD</label>
                                        <input class="form-control" id="pwd" type="password" name="password" 
                                            placeholder="Enter your password" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-primary">Sign In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('public/assets/libs/jquery/dist/jquery.min.js') }} "></script>
    <script src="{{ asset('public/assets/libs/popper.js/dist/umd/popper.min.js') }} "></script>
    <script src="{{ asset('public/assets/libs/bootstrap/dist/js/bootstrap.min.js') }} "></script>
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>