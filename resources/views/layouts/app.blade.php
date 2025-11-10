<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @hasSection('title')
            @yield('title') - Doctor CRUD Project
        @else
            Doctor CRUD Project
        @endif
    </title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-blue-500 text-white">
    <div class="container mx-auto">
        @yield('content')
    </div>

    <footer class="bg-gray-800 text-dark text-center py-4 mt-8">
        <p>&copy; {{ date('Y') }} Laravel Portfolio. All rights reserved.</p>
    </footer>
    
</body>
</html>