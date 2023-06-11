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
                    <select class="form-control" name="country_id">
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