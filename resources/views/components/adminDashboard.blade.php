<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-50">

<div class="flex min-h-screen">

    {{-- Sidebar --}}
    <x-adminSidebar />

    {{-- Main Content --}}
    <main class="flex-1 p-8 overflow-y-auto">
        {{ $slot }}
    </main>

</div>

</body>
</html>
