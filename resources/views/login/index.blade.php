<!DOCTYPE html>
<html>
<!-- UPGRADED FROM CORE TO LARAVEL 8.6 -->
<head>
    <meta charset="UTF-8">
    <title>BACKEND TASK MS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    @include('layout.header')

</head>
<body class="sign-in" oncontextmenu="return false;">
    <div class="wrapper">
        <div class="sign-in-page">
            <div class="signin-popup">
                <div class="signin-pop">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cmp-info">
                                <div class="cm-logo">
                                    <img src="{{ asset('assets/images/cm-logo.png') }}">
                                    <p>Workwise, is a global freelancing platform and social networking where businesses and independent professionals connect and collaborate remotely</p>
                                </div>
                                <img src="{{ asset('assets/images/cm-main-img.png') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="login-sec">
                                <ul class="sign-control">
                                    <li data-tab="tab-1" class="current"><a href="#" title="">Sign in</a></li>
                                    <li data-tab="tab-2"><a href="#" title="">Sign up</a></li>
                                </ul>
                                <div class="sign_in_sec current" id="tab-1">
                                  @include('login.partials.login')
                                </div>
                                <div class="sign_in_sec" id="tab-2">
                                    @include('login.partials.register')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout.footer_scripts')
   
    @include('layout.messages') 
  
</body>
<!-- UPGRADED FROM CORE TO LARAVEL 8.6 -->

</html>