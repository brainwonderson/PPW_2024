@extends('layouts.app')

@section('content')
<head>
    <!-- Tambahkan Animate.css jika kamu belum menginstalnya -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>


<div class="container mx-auto py-10">
    <!-- Header Section -->
    <div class="text-center mb-12 animate__animated animate__fadeIn">
        <h1 class="text-4xl font-bold mb-4">Departemen Agama dan Sosial</h1>
        <p class="text-gray-600 max-w-3xl mx-auto">
            Berperan dalam kegiatan keagamaan dan sosial, berkolaborasi dalam keanekaragaman di kampus.
        </p>
    </div>

    <!-- Images and Description -->
    <div class="flex justify-center mb-12 space-x-4 animate__animated animate__fadeInUp animate__delay-1s">
        <div class="w-1/2 p-4">
            <img src="{{ asset('image/logodepag.png') }}" alt="Department Logo" class="rounded-md mx-auto">
        </div>
        <div class="w-1/2 p-4">
            <img src="{{ asset('image/prodeg.png') }}" alt="Department Event" class="rounded-md mx-auto">
        </div>
    </div>

    <!-- Leaders Section -->
    <div class="text-center mb-12 animate__animated animate__fadeInUp animate__delay-2s">
        <div class="flex justify-center space-x-20">
            <div class="text-center">
                <img src="{{ asset('image/markus.png') }}" alt="Leader 1" class="h-30 w-30 rounded-full mb-4 mt-3">
                <p class="text-lg font-bold">Markus Hutagalung</p>
                <p>Kepala Divisi</p>
            </div>
            <div class="text-center mt-0">
                <img src="{{ asset('image/Richard.png') }}" alt="Leader 2" class="h-30 w-30 rounded-full mb-4 mx-auto">
                <p class="text-lg font-bold mt-1">Richard Aritonang</p>
                <p>Wakil Kepala Divisi</p>
            </div>
        </div>
    </div>

    <!-- Program Kerja Section -->
    <div class="text-center mb-12 animate__animated animate__fadeInUp animate__delay-3s">
        <h2 class="text-3xl font-bold mb-8">PROGRAM KERJA</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            
            <!-- Box with Popup for Ibadah Jumat -->
            <a href="#" class="relative group bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300 transition duration-300 transform hover:scale-105">
                Ibadah Jumat
                <div class="absolute hidden group-hover:block bg-white p-4 rounded-lg shadow-lg w-64 left-1/2 transform -translate-x-1/2 -top-24 z-20 text-left">
                    <p class="text-gray-700">Informasi lebih lanjut tentang Ibadah Jumat.</p>
                </div>
            </a>
            
            <!-- Box with Popup for Weekly Reflection -->
            <a href="#" class="relative group bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300 transition duration-300 transform hover:scale-105">
                Weekly reflection
                <div class="absolute hidden group-hover:block bg-white p-4 rounded-lg shadow-lg w-64 left-1/2 transform -translate-x-1/2 -top-24 z-20 text-left">
                    <p class="text-gray-700">Informasi tentang Weekly Reflection.</p>
                </div>
            </a>

            <!-- Box with Popup for Festival Musik Rohani -->
            <a href="#" class="relative group bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300 transition duration-300 transform hover:scale-105">
                Festival Musik Rohani
                <div class="absolute hidden group-hover:block bg-white p-4 rounded-lg shadow-lg w-64 left-1/2 transform -translate-x-1/2 -top-24 z-20 text-left">
                    <p class="text-gray-700">Informasi tentang Festival Musik Rohani.</p>
                </div>
            </a>

            <!-- Box with Popup for Paskah -->
            <a href="#" class="relative group bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300 transition duration-300 transform hover:scale-105">
                Paskah
                <div class="absolute hidden group-hover:block bg-white p-4 rounded-lg shadow-lg w-64 left-1/2 transform -translate-x-1/2 -top-24 z-20 text-left">
                    <p class="text-gray-700">Informasi lebih lanjut tentang Paskah.</p>
                </div>
            </a>

            <!-- Box with Popup for Pengajian -->
            <a href="#" class="relative group bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300 transition duration-300 transform hover:scale-105">
                Pengajian
                <div class="absolute hidden group-hover:block bg-white p-4 rounded-lg shadow-lg w-64 left-1/2 transform -translate-x-1/2 -top-24 z-20 text-left">
                    <p class="text-gray-700">Informasi lebih lanjut tentang Pengajian.</p>
                </div>
            </a>

            <!-- Box with Popup for Sharing Session -->
            <a href="#" class="relative group bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300 transition duration-300 transform hover:scale-105">
                Sharing session
                <div class="absolute hidden group-hover:block bg-white p-4 rounded-lg shadow-lg w-64 left-1/2 transform -translate-x-1/2 -top-24 z-20 text-left">
                    <p class="text-gray-700">Informasi tentang Sharing Session.</p>
                </div>
            </a>

            <!-- Box with Popup for Charity -->
            <a href="#" class="relative group bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300 transition duration-300 transform hover:scale-105">
                Charity
                <div class="absolute hidden group-hover:block bg-white p-4 rounded-lg shadow-lg w-64 left-1/2 transform -translate-x-1/2 -top-24 z-20 text-left">
                    <p class="text-gray-700">Informasi lebih lanjut tentang kegiatan Charity.</p>
                </div>
            </a>
            
        </div>
    </div>

</div>


@endsection
