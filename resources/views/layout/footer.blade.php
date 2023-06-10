<footer>
    <div class="footy-sec mn no-margin">
        <div class="container">
            <ul>
                <li><a href="help-center.html" title="">Help Center</a></li>
                <li><a href="about.html" title="">About</a></li>
                <li><a href="#" title="">Privacy Policy</a></li>
                <li><a href="#" title="">Community Guidelines</a></li>
                <li><a href="#" title="">Cookies Policy</a></li>
                <li><a href="#" title="">Career</a></li>
                <li><a href="forum.html" title="">Forum</a></li>
                <li><a href="#" title="">Language</a></li>
                <li><a href="#" title="">Copyright Policy</a></li>
            </ul>
            <p><img src="{{ asset('assets/images/copy-icon2.png') }}">Copyright 2019</p>
            <img class="fl-rgt" src="{{ asset('assets/images/logo2.png') }}">
        </div>
    </div>
</footer>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('assets/js/popper.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.range-min.js') }}"></script>
<script src="{{ asset('assets/lib/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>


@stack('custom_js')


<script>
    $(document).ready(function() {
      $('.all_countries').select2();
    });
</script>
  

