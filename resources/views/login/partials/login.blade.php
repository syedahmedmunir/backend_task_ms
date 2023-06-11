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