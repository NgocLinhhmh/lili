<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @yield('link-css')
</head>
<body>
    <!-- Header -->
    @include('includes.header')
    <!--End Header -->

    <!-- content -->
    @yield('content')
    <!--End content -->

    <!-- Footer -->
    @include('includes.footer')
    <!--End Footer -->

    @yield('link-js')
</body>
</html>
