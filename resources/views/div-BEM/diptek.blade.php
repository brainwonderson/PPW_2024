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


<div class="container mx-auto py-10 bg-gradient-to-b from-light-blue to-white min-h-screen">
    <!-- Header Section -->
    <div class="text-center mb-12 animate__animated animate__fadeIn">
        <h1 class="text-4xl font-bold mb-4">DIPTEK ILMU PENGETAHUAN DAN TEKNOLOGI</h1>
        <p class="text-gray-600 max-w-3xl mx-auto">
            Departemen Ilmu Pengetahuan dan Teknologi (DIPTEK) merupakan departemen yang bergerak dalam ilmu pengetahuan dan teknologi. Departemen ini juga mengelola dan memberikan informasi mengenai ilmu pengetahuan dan teknologi kepada mahasiswa, serta membantu meningkatkan minat dan bakat mahasiswa di bidang akademik.
        </p>
    </div>

    <!-- Images and Description -->
    <div class="flex justify-center mb-12 space-x-4 animate__animated animate__fadeInUp animate__delay-1s">
        <div class="w-1/2 p-4">
            <img src="{{ asset('image/logo-diptek.png') }}" alt="Department Logo" class="rounded-md mx-auto w-100 h-300">
        </div>
        <div class="w-1/2 p-4">
            <img src="{{ asset('image/proker.png') }}" alt="Department Event" class="rounded-md mx-auto w-100 h-600">
        </div>
    </div>
    
    <!-- Leaders Section -->
    <div class="text-center mb-12 animate__animated animate__fadeInUp animate__delay-2s">
        <div class="flex justify-center space-x-16">
            @if(!$kadep)
                    <p>Kepala Divisi</p>
                </div>
            @endif
            @if(!$wakadep)
                    <p>Wakil Kepala Divisi</p>
                </div>
            @endif
            @if($kadep)
                <div class="text-center">
                    <img src="{{ asset('bem/' . $kadep->foto) }}" alt="{{ $kadep->nama }}" class="w-72 rounded-full mt-20">
                    <p class="text-lg font-bold">{{ $kadep->nama }}</p>
                    <p>Kepala Divisi</p>
                </div>
            @endif
            @if($wakadep)
                <div class="text-center">
                    <img src="{{ asset('bem/' . $wakadep->foto) }}" alt="{{ $wakadep->nama }}" class="w-72 rounded-full mt-20">
                    <p class="text-lg font-bold">{{ $wakadep->nama }}</p>
                    <p>Wakil Kepala Divisi</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Program Kerja Section -->
    <div class="text-center mb-12 animate__animated animate__fadeInUp animate__delay-3s">
        <h2 class="text-3xl font-bold mb-8">PROGRAM KERJA</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Program Card 1 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Del Goes to School
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Program untuk mengenalkan Institut Teknologi Del kepada siswa sekolah menengah.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
    
            <!-- Program Card 2 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                DMSC
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Kompetisi matematika dan sains yang diadakan oleh Institut Teknologi Del.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
    
            <!-- Program Card 3 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                PKM
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Program Kreativitas Mahasiswa, untuk mendukung kreativitas mahasiswa dalam berbagai bidang.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
