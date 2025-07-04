<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zephire Digital - YouTube Channel Management Services</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50 transition-colors duration-300">
    <!-- Navigation -->
    @include('components.nav')

    <!-- Hero Section -->
    @yield('main')

    <!-- Footer -->
    @include('components.footer')
</body>
</html>
