<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Tracer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen max-w-full max-w-screen">
    <header class="bg-white shadow-md p-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">UMY Alumni Tracer</h1>

        <!-- Tombol Burger -->
        <button id="menu-toggle" class="text-gray-700 text-2xl md:hidden focus:outline-none">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Menu Navigasi -->
        <nav id="menu" class="hidden md:flex flex-col md:flex-row absolute md:static top-16 left-0 w-full md:w-auto bg-white md:bg-transparent shadow-md md:shadow-none p-4 md:p-0">
            <a href="#" class="block md:inline mx-4 text-gray-700 py-2">Home</a>
            <a href="#" class="block md:inline mx-4 text-gray-700 py-2">Kuesioner</a>
            <a href="#" class="block md:inline mx-4 text-gray-700 py-2">Kontak</a>
            <button class="bg-green-500 text-white px-4 py-2 rounded mt-2 md:mt-0">Sign Up</button>
        </nav>
    </header>

    <!-- Script untuk toggle menu -->
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('menu').classList.toggle('hidden');
        });
    </script>


    <main>
        @yield('content')
    </main>

    <footer class="p-6 bg-gray-900 text-white text-center">
        <p>&copy; 2024 UMY Alumni Tracer. All rights reserved.</p>
    </footer>
</body>
</html>
