<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TESOL | Login</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <link rel="icon" type="image/png" href="images/trainer/favicon.png" />

        <link rel="stylesheet" href="{{ asset('css/trainer/app.min.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/trainer/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/trainer/font/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/trainer/MyraidPRO/font-style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/trainer/custom-login.css') }}">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>

    <body>
        <div class="login_page">
            <div class="container-fluid">
                <div class="row d-flex flex-row-reverse">
                    <div class="login_page_bg col-md-12 col-lg-7">
                        <div class="login_left_block">
                            <div class="login_left_logo1">
                                <a href="javascript:void(0);"><img src="/images/trainer/logo-left.png" /></a>
                            </div>
                            <div class="login_left_text">
                                <h1 class="login_left_text_title color-white">British<br>TESOL<br>Training</h1>
                                <p class="login_left_text_description color-white">Great teachers help to make great students. Imperial English TESOL training is here to guide those who wish to inspire.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-5">
                        <div class="login_right_logo">
                            <a href="index.html" class="back-to-page"></a>
                            <a href="javascript:void(0);" class="brand-logo"><img src="/images/trainer/logo-right.png" /></a>
                        </div>
                        <div class="login_form_block">
                            <form class="login_form">
                                <a href="javascript:void(0);"><img src="/images/trainer/login-user.png" width="60px"></a>
                                <h2 class="title mb-5">Log In</h2>
                                <h6 class="show-error-msg color-red" id="login-alert" style="display: none;">
                                    <img src="/images/trainer/icon-error.png" /> E-mail id or Password does not match
                                </h6>
                                <div class="input-div">
                                    <div class="div">
                                        <!-- <input type="text" class="input id" name="id" value="" placeholder="E-mail address" autocomplete="off"> -->
                                         <input id="email" type="text" class="form-control" name="username" value="" placeholder="username or email"> 
                                    </div>
                                    <div class="i">
                                        <i class="flaticon-user color-grey"></i>
                                    </div>
                                </div>
                                <div class="input-div">
                                    <div class="div">
                                        <!-- <input type="password" class="input password" name="password" value="" placeholder="Password"> -->
                                         <input id="password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    <div class="i">
                                        <i class="flaticon-password color-grey"></i>
                                    </div>
                                </div>
                                <label class="checkbox_label">Remember password
                                    <input type="checkbox" name="remember">
                                    <span class="checkmark"></span>
                                </label>
                                <!-- <input type="button" class="btn btn-save btn-signin" value="Sign in"> -->
                                 <a id="btn-login" class="btn btn-save btn-signin">Sign in  </a>
                                <a class="forgot-link mt-2" href="forgot-pass.html">Forgot your password?</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $url = env('APP_URL'); ?>
        <script type="text/javascript">
            window.url = "{{$url}}";
            $(document).ready(function(){
                $('#btn-login').click(function(){
                    send();
                });
            });
            function send() {
                var email       = $('#email').val();
                var password    = $('#password').val();
                var loginData   = {
                    email: email,
                    password:password,
                    api:"tesol-login",
                }
                $.ajax({
                    url: url + "checklogin",
                    type: 'post',
                    dataType: 'json',
                    contentType: 'application/json',
                    success: function (data) {
                        if(data['success']){

                            if(data['result']['user'] == "trainer"){
                                location.href= "/trainer/dashboard";
                               $('#login-alert').fadeOut();
                            }else{
                                location.href= "/teacher/dashboard";
                               $('#login-alert').fadeOut();
                            }

                        }else{
                           $('#login-alert').fadeIn();
                        }
                    },
                    data: JSON.stringify(loginData),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            }
        </script>

    </body>
</html>