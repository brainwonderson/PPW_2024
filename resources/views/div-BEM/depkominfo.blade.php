@extends('layouts.app')

@section('content')

<head>
    <!-- Tambahkan Animate.css jika kamu belum menginstalnya -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        /* Custom Tooltip styling */
        .tooltip {
            display: none;
        }
        .program-card:hover .tooltip {
            display: block;
        }
    </style>
</head>
    <div class="container mx-auto py-10">
        <!-- Header Section -->
        <div class="text-center mb-12 animate__animated animate__fadeIn">
            <h1 class="text-4xl font-bold mb-4">DEPARTEMEN KOMUNIKASI DAN INFORMASI</h1>
            <p class="text-gray-600 max-w-5zxl mx-auto">
            Berperan dalam menanggungjawabi kepentingan komunikasi dan informasi, jembatan antar departemen, dan memanfaatkan media komunikatif sebagai pusat informasi keorganisasian.            </p>
        </div>

        <!-- Images and Description -->
        <div class="flex justify-center mb-12 space-x-4 animate__animated animate__fadeInUp animate__delay-1s">
            <div class="w-1/2 p-4">
                <img src="{{ asset('image/logodepko.png') }}" alt="Department Logo" class="rounded-md mx-auto w-auto h-96">
            </div>
            <div class="w-1/2 p-4">
                <img src="{{ asset('image/keg dhpm.jpg') }}" alt="Department Event" class="rounded-md mx-auto w-auto h-80">
            </div>
        </div>

        <!-- Leaders Section -->
        <div class="text-center mb-12 animate__animated animate__fadeInUp animate__delay-2s">
            <div class="flex justify-center space-x-8">
                <div>
                <img src="{{ asset('image/archiko.png') }}" alt="Leader 1" class="w-96 h-72 rounded-full mt-20">
                    <p class="text-lg font-bold">ARCHICO SEMBIRING</p>
                    <p>Kepala Divisi</p>

                </div>
                <div>
                    
                </div>
            </div>
        </div>

    <!-- Program Kerja Section -->
    <div class="text-center mb-12 animate__animated animate__fadeInUp animate__delay-3s">
        <h2 class="text-3xl font-bold mb-8">PROGRAM KERJA</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Program Card 1 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Pengadaan Barang dan Alat Musik
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Menyediakan alat musik ketika ada acara di IT DEL
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
        
                <!-- Program Card 2 -->
                <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                    Merawat Kebersihan Ruangan SARPRAS
                    <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                        Del Mathematic and Science Competition, kompetisi matematika dan sains yang diadakan oleh Institut Teknologi del
                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                    </div>
                </div>
        
                <!-- Program Card 3 -->
                <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                    Pengadaan Barang dan Alat Musik
                    <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                        Program Kreativitas Mahasiswa, untuk mendukung kreativitas mahasiswa dalam berbagai bidang.
                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                    </div>
                </div>

                <!-- Program Card 4 -->
                <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                    Peminjaman Alat, Barang, dan Studio Musik
                    <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                        Program Kreativitas Mahasiswa, untuk mendukung kreativitas mahasiswa dalam berbagai bidang.
                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                    </div>
                </div>

                <!-- Program Card 5 -->
                <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                    Peminjaman Alat, Barang, dan Studio Musik
                    <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                        Program Kreativitas Mahasiswa, untuk mendukung kreativitas mahasiswa dalam berbagai bidang.
                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                   </div>
                </div>  
                {{-- Program Card 6 --}}
                <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                    Pelatihan dan Maintenance
                    <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                        Program Kreativitas Mahasiswa, untuk mendukung kreativitas mahasiswa dalam berbagai bidang.
                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                   </div>
                </div>  
        </div>
    </div>

@endsection
