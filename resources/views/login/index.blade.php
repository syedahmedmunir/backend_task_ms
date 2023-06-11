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

    <style>
        .select2-container {
        width: 100% !important;
        }
        
    </style>

</head>
<body class="sign-in">
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
                                    <h3>Sign in</h3>
                                    <form name="loginForm" id="loginForm" method="post" action="{{ route('login.attempt') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="email" name="login_email" id="login_email" placeholder="Email">
                                                    <i class="la la-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="password" name="login_password" id="login_password" placeholder="Password">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="checky-sec">
                                                    <div class="fgt-sec">
                                                        <input type="checkbox" name="cc" id="c1">
                                                        <label for="c1">
                                                            <span></span>
                                                        </label>
                                                        <small>Remember me</small>
                                                    </div>
                                                    <a href="#" title="">Forgot Password?</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <button type="submit" value="submit">Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="sign_in_sec" id="tab-2">
                                    <div class="dff-tab current" id="tab-3">
                                        <form name="registerForm" id="registerForm" method="post" action="{{ route('user.store') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="text" name="register_firstname" id="register_firstname" placeholder="First Name" required>
                                                        <i class="la la-user"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="text" name="register_lastname" id="register_lastname" placeholder="Last Name" required>
                                                        <i class="la la-user"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="form-group" style="position: relative">
                                                        <select class="all_countries form-control" name="country_id">
                                                            <option value=""> Select Country  </option>
                                                                @foreach ($countries as  $country)
                                                                    <option @if(request()->get('country_id')== $country->id) selected @endif value="{{ $country->id }}">{{ $country->nicename }}</option>
                                                                @endforeach
                                                          </select>
                                                          <span style="position: absolute; top:13px; left:15px;"> <i class="la la-globe"></i> </span>
                                                       
                                                         
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="email" name="register_email" id="register_email" placeholder="Email" required>
                                                        <i class="la la-at"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="password" name="register_password" id="register_password" placeholder="Password" required>
                                                        <i class="la la-lock"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="password" name="register_repeatPassword" id="register_repeatPassword" placeholder="Repeat Password" required>
                                                        <i class="la la-lock"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="checky-sec st2">
                                                        <div class="fgt-sec">
                                                            <input type="checkbox" name="cc" id="c2" required>
                                                            <label for="c2">
                                                                <span></span>
                                                            </label>
                                                            <small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <button type="submit" value="submit">Get Started</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.range-min.js') }}"></script>
    <script src="{{ asset('assets/lib/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    @include('layout.messages')

    <script>
        $(document).ready(function() {
        //   $('.all_countries').select2();
        });
    </script>
  
  
</body>
<!-- UPGRADED FROM CORE TO LARAVEL 8.6 -->

</html>