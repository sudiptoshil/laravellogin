<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Login</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="{{asset("backend/assets/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" />
   <link href="{{asset("backend/assets/bootstrap/css/bootstrap-responsive.min.css")}}" rel="stylesheet" />
   <link href="{{asset("backend/assets/font-awesome/css/font-awesome.css")}}" rel="stylesheet" />
   <link href="{{asset("backend/css/style.css")}}" rel="stylesheet" />
   <link href="{{asset("backend/css/style-responsive.css")}}" rel="stylesheet" />
   <link href="{{asset("backend/css/style-default.css")}}" rel="stylesheet" id="style_color" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="lock">
    <div class="lock-header">
        <!-- BEGIN LOGO -->
        <a class="center" id="logo" href="index.html">
            <img class="center" alt="logo" src="img/logo.png">
        </a>
        <!-- END LOGO -->
    </div>
    <h2 style="color:red" align="center">{{Session::get('message')}}</h2>
    <div class="login-wrap">
        <div class="metro single-size red">
            <div class="locked">
                <i class="icon-lock"></i>
                <span>Login</span>
            </div>
        </div>
     
        <div class="metro double-size green">
            <form action="{{route('admin-dashboard')}}" method="post">
                @csrf
                <div class="input-append lock-input">
                    <input type="email" class="" name="admin_email" placeholder="name">
                </div>
            
        </div>
        <div class="metro double-size yellow">
            
                <div class="input-append lock-input">
                    <input type="password" class="" name="admin_password" placeholder="Password">
                </div>
            
        </div>
        <div class="metro single-size terques login">
            
                <button type="submit" class="btn login-btn">
                    Login
                    <i class=" icon-long-arrow-right"></i>
                </button>
            </form>
        </div>
        <div class="metro double-size navy-blue ">
            <a href="index.html" class="social-link">
                <i class="icon-facebook-sign"></i>
                <span>Facebook Login</span>
            </a>
        </div>
        <div class="metro single-size deep-red">
            <a href="index.html" class="social-link">
                <i class="icon-google-plus-sign"></i>
                <span>Google Login</span>
            </a>
        </div>
        <div class="metro double-size blue">
            <a href="index.html" class="social-link">
                <i class="icon-twitter-sign"></i>
                <span>Twitter Login</span>
            </a>
        </div>
        <div class="metro single-size purple">
            <a href="index.html" class="social-link">
                <i class="icon-skype"></i>
                <span>Skype Login</span>
            </a>
        </div>
        <div class="login-footer">
            <div class="remember-hint pull-left">
                <input type="checkbox" id=""> Remember Me
            </div>
            <div class="forgot-hint pull-right">
                <a id="forget-password" class="" href="javascript:;">Forgot Password?</a>
            </div>
        </div>
    </div>
</body>
<!-- END BODY -->
</html>