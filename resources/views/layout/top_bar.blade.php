<header>
    <div class="container">
      <div class="header-data">
        <div class="logo">
            <a href="index-2.html" title=""><img src="{{ asset('assets/images/logo.png') }}"></a>
        </div>
        <div class="search-bar"></div>
        <nav>
          <ul>
            <li>
              <a href="{{ route('job.index') }}" title="">
                <span><img src="{{ asset('assets/images/icon5.png') }}"></span>
                Jobs
              </a>
            </li>
          </ul>
        </nav>
          <div class="menu-btn">
              <a href="#" title=""><i class="fa fa-bars"></i></a>
          </div>
          <div class="user-account">
              <div class="user-info">
                  <img src="{{ asset('assets/images/resources/user.png') }}">
                  <a href="#" title=""><?= ucfirst(auth()->user()->first_name) ?></a>
                  <i class="la la-sort-down"></i>
              </div>
              <div class="user-account-settingss">
                  <h3 class="tc"><a href="logout" title="">Logout</a></h3>
              </div>
          </div>
      </div>
    </div>
  </header>