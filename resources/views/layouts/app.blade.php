<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">

    <!-- HEADER -->
    <header class="bg-black text-white px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">Admin Panel</h1>
        <div class="flex items-center gap-4">
            <span>Admin</span>
            <button class=" bg-red-500 hover:bg-red-900 px-3 py-1 rounded">Logout</button>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <div class="flex flex-1">

        <!-- SIDEBAR -->
        <x-sidebar />

        <!-- CONTENT -->
        <main class="flex-1">
            @yield('content')
        </main>

    </div>

    <!-- FOOTER -->
    <footer class="bg-black text-center p-4 border-t">
        <p class="text-sm text-gray-500">
            © 2026 Mini Market App - All rights reserved.
        </p>
    </footer>

</body>
</html>