@extends('admin.sidebar.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Admin</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="flex">
        <!-- Main Content -->
        <main class="flex-1 p-6">
            <div class="flex items-center justify-center h-screen">
                <div class="text-center">
                    <h1 class="text-4xl font-bold mb-4">Welcome to the Admin Dashboard</h1>
                    <p class="text-lg text-gray-600">This is your admin area. Use the sidebar to navigate.</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>

@endsection