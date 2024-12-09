@extends('layouts.app')

@section('content')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Del Dance Drama Club(3dc)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Add this line to include Tailwind -->

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Content Section -->

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Del Dance Drama Club(3dc)</title>
<script src="https://cdn.tailwindcss.com"></script>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Header Section -->
    <div class="container mx-auto px-6 py-12">
        <!-- About Section -->
        <div class="bg-yellow-100 p-10 rounded-lg shadow-lg text-center">
            <div class="flex flex-col items-center">
                <!-- Logo/Avatar -->
                <img src="{{ asset('image/3dc.png') }}" alt="3DC Logo" class="w-20 h-20 rounded-full mb-4">
                <!-- Title -->
                <h1 class="text-3xl font-bold mb-6"> Del Dance Drama Club(3dc)</h1>
                <!-- Description -->
                <p class="text-gray-800 text-lg mb-4 leading-relaxed">
                3DC merupakan singkatan dari Del Dance Drama Club. Secara baku, 3DC juga sering disebut PTM, yaitu Paduan Tari Mahasiswa. 3DC adalah salah satu UKM di bidang seni yang ada di Institut Teknologi Del. 3DC memiliki 3 divisi yaitu modern dance, tradisional dance, drama. PTM atau 3DC sering berpartisipasi dalam berbagai kegiatan didalam kampus seperti IDG , IT Del fest bahkan kegiatan BEM mauoun luar kampus seperti perlombaan.
                </p>
                <!-- Image -->
                <img src="{{ asset('image/3dcall.jpg') }}" alt="3DC Group Photo"
                    class="w-full max-w-md rounded-lg shadow-md">
            </div>

        <!-- Program Kerja Section -->
        <div class="program-kerja text-center mt-12 animate_animated animatefadeInUp animate_delay-1s">
            <h2 class="text-2xl font-semibold mb-6">Jenis Kegiatan</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="program-item bg-white p-6 rounded-md shadow-md">Penampilan Tari Pada Acara Pengukuhan Mahasiswa Baru Angkatan 2024</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">Penampilan Tari Pada Acara Wisuda Tahun 2024</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">Penampilan Tari Pada Acara Pembukaan KM Cup</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">Penampilan Kolaborasi 3 Divisi UKM 3DC Pada Acara Festival Budaya</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">Penampilan Singkat Kolaborasi 3 Divisi UKM 3DC Pada UKM Day</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">Latihan Rutin Untuk Anggota 3DC</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">Penerimaan Anggota Baru 3DC</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">Evaluasi anggota 3DC</div>
            </div>
        </div>

        <!-- Struktur Keanggotaan Section -->
        <div class="struktur-keanggotaan text-center mt-12 animate_animated animatefadeInUp animate_delay-2s">
            <h2 class="text-2xl font-semibold mb-6">Struktur Keanggotaan 2023/2024</h2>
            <div class="flex justify-center space-x-12">
                <div class="leader-item text-center">
                    <img src="psm.jpg" alt="Ketua Divisi" class="w-24 h-24 rounded-full mx-auto">
                    <p class="mt-4 font-semibold">Agnes Cicilia Marbun</p>
                    <p class="text-gray-600">Ketua UKM</p>
                </div>
                <div class="leader-item text-center">
                    <img src="psm.jpg" alt="Wakil Kepala Divisi" class="w-24 h-24 rounded-full mx-auto">
                    <p class="mt-4 font-semibold">Angela Triwani Stefani Sitorus</p>
                    <p class="text-gray-600">Wakil Ketua UKM</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle Mobile Menu
        document.getElementById('menu-toggle').addEventListener('click', function () {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>

</body>
@endsection


