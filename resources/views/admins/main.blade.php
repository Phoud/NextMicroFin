<!DOCTYPE html>
<html>
@include('admins.partials.header')
<body>
@include('admins.partials.sidebar')
<div id="right-panel" class="right-panel">
@include('admins.partials.navbar')
<div class="container">
@yield('content')
</div>
</div>
@include('admins.partials.footer')
</body>
</html>