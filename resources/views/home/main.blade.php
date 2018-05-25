<!DOCTYPE html>
<html lang="en">
@include('home.partials.header')

<body id="body">
@include('home.partials.navbar')
@yield('content')
@include('home.partials.footer')
</body>
</html>