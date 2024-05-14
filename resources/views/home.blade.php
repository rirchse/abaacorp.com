<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.style')
        @yield('stylesheets')
</head>
<body>
    @include('home.header')
        @yield('content')
    @include('home.footer')
    @include('partials.script')
    @yield('scripts')
</body>
</html>