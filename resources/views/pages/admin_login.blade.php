<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="backend/images/iconcoffee.png" type="image/ico" />
    <title>Quản lý cửa hàng</title>

    <!-- Bootstrap -->
    <link href="{{asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('backend/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('backend/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('backend/vendors/animate.css/animate.min.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('backend/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="{{URL::to('/admin-dashboard')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <h1>Nhập thông tin</h1>
                    <?php
                        $msg = Session::get('msg');
                        if($msg){
                            echo $msg;
                            Session::put("msg",null);
                        }
                    ?>
                    <div>
                        <input type="text" name="username" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <br />
                    <div>
                        <button type="submit" class="btn btn-success">Đăng nhập</button>
                        <button type="submit" class="btn btn-success">Quên mật khẩu</button>
                    </div>
                    <br />

                    <div class="clearfix"></div>

                    <div class="separator">
{{--                        <p class="change_link">New to site?--}}
{{--                            <a href="#signup" class="to_register"> Create Account </a>--}}
{{--                        </p>--}}



{{--                        <div>--}}
{{--                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>--}}
{{--                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>--}}
{{--                        </div>--}}
                    </div>
                </form>
                <div class="clearfix"></div>
                <div>
                    <a class="btn btn-default submit" href="#">Quên mật khẩu</a>
                </div>
            </section>
        </div>

{{--        <div id="register" class="animate form registration_form">--}}
{{--            <section class="login_content">--}}
{{--                <form>--}}
{{--                    <h1>Create Account</h1>--}}
{{--                    <div>--}}
{{--                        <input type="text" class="form-control" placeholder="Username" required="" />--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <input type="email" class="form-control" placeholder="Email" required="" />--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <input type="password" class="form-control" placeholder="Password" required="" />--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <a class="btn btn-default submit" href="index.html">Submit</a>--}}
{{--                    </div>--}}

{{--                    <div class="clearfix"></div>--}}

{{--                    <div class="separator">--}}
{{--                        <p class="change_link">Already a member ?--}}
{{--                            <a href="#signin" class="to_register"> Log in </a>--}}
{{--                        </p>--}}

{{--                        <div class="clearfix"></div>--}}
{{--                        <br />--}}

{{--                        <div>--}}
{{--                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>--}}
{{--                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </section>--}}
{{--        </div>--}}
    </div>
</div>
</body>
</html>
