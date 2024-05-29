<!DOCTYPE html>
<html>

<head>
    @include('includes.head')
</head>

<body>

    <!-- header section strats -->
    @include('includes.header')
    <!-- end header section -->

    @yield('home')

    @yield('about')

    @yield('shop')

    @yield('blog')
    <!-- info section -->
    @include('includes.info')
    <!-- end info_section -->

    <!-- footer section -->
    @include('includes.footer')
    <!-- footer section -->

    <!-- footer JS section -->
    @include('includes.footerJS')
    <!-- footer JS section -->

</body>

</html>
