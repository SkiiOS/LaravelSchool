<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    @vite('resources/css/app.css')
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    <div class="antialiased bg-gray-50 dark:bg-gray-900 min-h-screen">
    <!-- Navbar -->
    <x-admin.navbar/>

    <!-- Sidebar -->
    <x-admin.sidebar/>

    <!-- Main -->
    <main class="p-4 md:ml-64 h-auto pt-20">
      <div class="mx-auto max-w-7x1 px-4 py-6 sm:px-6 lg:px-8">
        {{ $slot }}
    </div>
    </main>
  </div>
</body>
</html>
