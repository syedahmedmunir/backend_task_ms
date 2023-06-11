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
  