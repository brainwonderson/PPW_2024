@extends('layouts.app')

@section('content')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Del Dance Drama Club (3DC)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Add this line to include Tailwind -->

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Content Section -->
    <div class="container mx-auto px-6 py-12">
        <!-- Header Content -->
        <div class="bg-yellow-100 p-8 rounded-md text-center animate__animated animate__fadeIn">
            <h1 class="text-3xl font-bold mb-4">Del Dance Drama Club (3DC)</h1>
            <p class="text-gray-700 mb-4">3DC merupakan singkatan dari Del Dance Drama Club. Secara baku, 3DC juga sering disebut PTM, yaitu Paduan Tari Mahasiswa. 3DC adalah salah satu UKM di bidang seni yang ada di Institut Teknologi Del. 3DC memiliki 3 divisi yaitu Modern Dance, Tradisional Dance, Drama. PTM atau 3DC sering berpartisipasi dalam berbagai kegiatan di dalam kampus seperti IDG, IT Del Fest, bahkan kegiatan BEM maupun luar kampus seperti perlombaan.</p>
            <img src="image1.jpg" alt="Group Photo" class="w-full max-w-xs mx-auto rounded-md">
        </div>

        <!-- Program Kerja Section -->
        <div class="program-kerja text-center mt-12 animate__animated animate__fadeInUp animate__delay-1s">
            <h2 class="text-2xl font-semibold mb-6">Program Kerja</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="program-item bg-white p-6 rounded-md shadow-md">Inaugurasi, Dies Natalis dan Graduation (IDG)</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">Pembukaan & Penutupan KM Cup</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">Festival Budaya</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">UKM Day</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">Latihan Rutin Anggota 3DC</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">Penerimaan Anggota 3DC</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">Evaluasi Anggota 3DC</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">IT Del Fest</div>
            </div>
        </div>

        <!-- Struktur Keanggotaan Section -->
        <div class="struktur-keanggotaan text-center mt-12 animate__animated animate__fadeInUp animate__delay-2s">
            <h2 class="text-2xl font-semibold mb-6">Struktur Keanggotaan 2023/2024</h2>
            <div class="flex justify-center space-x-12">
                <div class="leader-item text-center">
                    <img src="leader1.jpg" alt="Ketua Divisi" class="w-24 h-24 rounded-full mx-auto">
                    <p class="mt-4 font-semibold">Markus Hutagalung</p>
                    <p class="text-gray-600">Kepala Divisi</p>
                </div>
                <div class="leader-item text-center">
                    <img src="leader2.jpg" alt="Wakil Kepala Divisi" class="w-24 h-24 rounded-full mx-auto">
                    <p class="mt-4 font-semibold">Salwa Harahap</p>
                    <p class="text-gray-600">Wakil Kepala Divisi</p>
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



