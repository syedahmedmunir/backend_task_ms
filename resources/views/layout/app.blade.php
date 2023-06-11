<!--BACKEND TASK MS-->

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>@yield('title')</title>

    @include('layout.header')

    @stack('custom_css')

</head>

<body>

    <div class="wrapper">

        @include('layout.top_bar')

        @yield('content')

    </div>

    @include('layout.footer')


    @include('layout.footer_scripts')

    @include('layout.messages')
    
</body>
</html>
