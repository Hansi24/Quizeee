<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include your head content here -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Quizeee</title>
</head>
<body>
    <x-navbar />
    
    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>


