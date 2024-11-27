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
        <h1 class="text-4xl font-bold mb-4">DEPARTEMEN OLAHRAGA</h1>
        <p class="text-gray-600 max-w-3xl mx-auto">
            Departemen Olahraga IT Del berdedikasi untuk membina dan mengembangkan minat serta bakat olahraga mahasiswa, serta meningkatkan kualitas olahraga di lingkungan kampus.
        </p>
    </div>

    <!-- Images and Description -->
    <div class="flex justify-center mb-12 space-x-4 animate__animated animate__fadeInUp animate__delay-1s">
        <div class="w-1/2 p-4">
            <img src="{{ asset('image/depol.png') }}" alt="Department Logo" class="rounded-md mx-auto w-fit h-80">
        </div>
        <div class="w-1/2 p-4">
            <img src="{{ asset('image/Depol_keg.jpg') }}" alt="Department Event" class="rounded-md mx-auto w-fit h-80">
        </div>
    </div>

    <!-- Leaders Section -->
    <div class="text-center mb-12 animate__animated animate__fadeInUp animate__delay-2s">
        <div class="flex justify-center space-x-16">
            <div class="text-center">
                <img src="{{ asset('image/ketua depol.jpg') }}" alt="Leader 1" class="w-72 rounded-full mb-5 mx-auto">
                <p class="text-lg font-bold">ALBERT PANGGABEAN</p>
                <p>Kepala Divisi</p>
            </div>
            <div class="text-center">
                <img src="{{ asset('image/wakil.jpg') }}" alt="Leader 2" class="w-72 rounded-full mb-5 mx-auto">
                <p class="text-lg font-bold">SALWA HARAHAP</p>
                <p>Wakil Kepala Divisi</p>
            </div>
        </div>
    </div>

    <!-- Program Kerja Section -->
    <div class="text-center mb-12 animate__animated animate__fadeInUp animate__delay-3s">
        <h2 class="text-3xl font-bold mb-8">PROGRAM KERJA</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Program Card 1 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Pengumpulan Dana Inventory
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                Kegiatan ini merupakan program kerja rutin dari Departemen Olahraga. Panitia akan mendiskuasikan tenggat waktu dan jumlah dana yang akan dikumpulkan oleh mahasiswa, panitia juga akan menyampaikan informasi terkait pengadaan pengumpulan inventori kepada mahasiswa angkatan 2023, dan dananya akan dipakai untuk membeli peralatan olahraga.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
    
            <!-- Program Card 2 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Senam Pagi
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Kegiatan yang dilaksanakan oleh seluruh mahasiswa yang berada di asrama dalam setiap hari Selasa dan Jumat pada pukul 05.00 pagi.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
    
            <!-- Program Card 3 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Fun Match With IT Del
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                Wadah bagi mahasiswa yang ingin berkompetisi dalam bidang olahraga. Kompetisi ini mengikutsertakan olahraga futsal dan voli.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>

            <!-- Program Card 4 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Keluaga Mahasiswa Cup (KM Cup)
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                Meliputi pertandingan untuk beberapa cabang olahraga yang diikuti oleh seluruh Mahasiswa/i serta dosen/staff. Dalam kegiatan KM-Cup ini setiap Mahasiswa/i berkesempatan menyalurkan dan mengembangkan bakat yang dimilikinya dalam bidang olahraga. Hal ini diperkuat dengan fakta bahwa Institut Teknologi Del memiliki Dosen, Staf, serta Mahasiswa/i yang sangat menyukai olahraga.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
