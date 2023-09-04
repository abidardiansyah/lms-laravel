<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>@yield('title')</title>
    @include('includes.meta')
    @include('includes.style')
</head>
<body>
    @yield('content')
    @include('includes.script')
</body>
</html>