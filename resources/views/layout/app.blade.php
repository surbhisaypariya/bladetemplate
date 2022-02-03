<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blade Template</title>
    
    @include('include/styles')
</head>
<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        @include('include/sidebar')
        @include('include/flash-message')
        @yield('content')
        @include('include/footer')
    </div>
    <!-- ./wrapper -->
    
    @include('include/script')
    
</body>
</html>
