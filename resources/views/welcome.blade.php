<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
  </head>
  <body>
    <header class="bg-slate-800 text-white px-6 py-4 flex justify-between items-center shadow">

    <div class="flex items-center gap-3">
        <h1 class="text-xl font-bold tracking-wide">Admin Panel</h1>
    </div>

    <!-- Right Menu -->
    <div class="flex items-center gap-4">

        <button class="hover:bg-slate-700 p-2 rounded transition">
            🔔
        </button>

        <!-- User -->
        <div class="flex items-center gap-2">
            <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
            <span class="text-sm">Admin</span>
        </div>

        <!-- Logout -->
        <button class="bg-red-500 hover:bg-red-900 px-3 py-1 rounded text-sm">
            Logout
        </button>

    </div>

</header>
  </body>
</html>