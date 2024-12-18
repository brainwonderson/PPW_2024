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
            <h1 class="text-4xl font-bold mb-6">Welcome to the Admin Dashboard</h1>
            
            <!-- Informasi Dinamis -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Jumlah Anggota -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-2">Total Anggota</h2>
                    <p class="text-3xl font-bold text-blue-600">{{ $jumlahAnggota }}</p>
                </div>

                <!-- Jumlah Departemen -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-2">Total Departemen</h2>
                    <p class="text-3xl font-bold text-green-600">{{ $jumlahDepartemen }}</p>
                </div>

                <!-- Jumlah UKM -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-2">Total UKM</h2>
                    <p class="text-3xl font-bold text-yellow-600">{{ $jumlahUKM }}</p>
                </div>

                <!-- Total Votes -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-2">Total Votes</h2>
                    <p class="text-3xl font-bold text-red-600">{{ $jumlahVotes }}</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>

@endsection
