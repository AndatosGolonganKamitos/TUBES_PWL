<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <!-- HEADER -->
    <header class="bg-slate-800 text-white px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">Admin Panel</h1>
        <div class="flex items-center gap-4">
            <span>Admin</span>
            <button class="bg-red-500 px-3 py-1 rounded">Logout</button>
        </div>
    </header>

    <!-- MAIN -->
    <div class="flex">

        <!-- SIDEBAR -->
        <x-sidebar />

        <!-- CONTENT -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>

    </div>

</body>
</html>