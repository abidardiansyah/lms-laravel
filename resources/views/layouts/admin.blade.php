<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>@yield('title')</title>
    @include('includes.meta')
    @include('includes.style')
</head>
<body>
    @include('includes.admin')
    @yield('content')
    @include('includes.footer')
    @include('includes.script')
</body>
</html>