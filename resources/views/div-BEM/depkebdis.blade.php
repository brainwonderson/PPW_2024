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
        <h1 class="text-4xl font-bold mb-4">DEPARTEMEN KETERTIBAN DAN KEDISIPLINAN</h1>
        <p class="text-gray-600 max-w-3xl mx-auto">
        Departemen Ketertiban dan Kedisiplinan merupakan departemen yang mengemban tugas menegakkan dan meningkatkan ketertiban dan kedisiplinan seluruh mahasiswa.
        </p>
    </div>

    <!-- Images and Description -->
    <div class="flex justify-center mb-12 space-x-4 animate_animated animatefadeInUp animate_delay-1s">
        <div class="w-1/2 p-4">
            <img src="{{ asset('image/ketertiban.png') }}" alt="Department Logo" class="rounded-md mx-auto w-200 h-1000">
        </div>
        <div class="w-1/2 p-4">
            <img src="{{ asset('image/depkebdis.jpg') }}" alt="Department Event" class="rounded-md mx-auto w-100 h-80">
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
                Berkoordinasi dengan Kemahasiswaan Terkait Ketertiban dan Kedisiplinan
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Bertindak sebagai pihak pertama dalam melaksanakan tugas yang diberikan oleh Kemahasiswaan.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
    
            <!-- Program Card 2 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Support Antar Departemen BEM IT Del
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Membantu Departemen BEM IT Del lainnya dalam usaha menyukseskan program kerja.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
    
            <!-- Program Card 3 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Pemeriksaan perlengkapan makan Mahasiswa/Mahasiswi
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                Membariskan Mahasiswa/i sebelum makan dan melakukan pemeriksaan perlengkapan makan.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>

            <!-- Program Card 4 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Pengawasan Pelaksanaan Piket Makan
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Mengatur penjadwalan piket makan dan mengawasi pelaksanaan piket makan yang dilakukan oleh seluruh Mahasiswa/i.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>

            <!-- Program Card 5 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Membuat Denah Makan Mahasiswa/Mahasiswi
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Membuat denah makan untuk mengalokasikan tempat makan Mahasiswa/i.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
            
            <!-- Program Card 6 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Lomba Peraturan Baris Berbaris (PBB)
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                Perlombaan yang diselenggarakan 1 kali dalam satu semester.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
