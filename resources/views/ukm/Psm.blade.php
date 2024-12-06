@extends('layouts.app')

@section('content')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paduan Suara Mahasiswa (PSM)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Add this line to include Tailwind -->

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Content Section -->

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Paduan Suara Mahasiswa (PSM)</title>
<script src="https://cdn.tailwindcss.com"></script>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Header Section -->
    <div class="container mx-auto px-6 py-12">
        <!-- About Section -->
        <div class="bg-yellow-100 p-10 rounded-lg shadow-lg text-center">
            <div class="flex flex-col items-center">
                <!-- Logo/Avatar -->
                <img src="{{ asset('image/psmm.jpg') }}" alt="PSM Logo" class="w-20 h-20 rounded-full mb-4">
                <!-- Title -->
                <h1 class="text-3xl font-bold mb-6">Paduan Suara Mahasiswa (PSM)</h1>
                <!-- Description -->
                <p class="text-gray-800 text-lg mb-4 leading-relaxed">
                UKM PSM (Unit Kegiatan Mahasiswa Paduan Suara Mahasiswa) adalah organisasi kemahasiswaan yang bergerak di bidang seni musik vokal, khususnya paduan suara, yang bertujuan untuk mengembangkan bakat dan minat mahasiswa dalam bernyanyi serta meningkatkan keterampilan musikal melalui berbagai kegiatan dan penampilan.
                </p>
                <!-- Image -->
                <img src="{{ asset('image/psmm.jpg') }}" alt="PSM Group Photo"
                    class="w-full max-w-md rounded-lg shadow-md">
            </div>

        <!-- Program Kerja Section -->
        <div class="program-kerja text-center mt-12 animate_animated animatefadeInUp animate_delay-1s">
            <h2 class="text-2xl font-semibold mb-6">Program Kerja</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="program-item bg-white p-6 rounded-md shadow-md">Latihan Rutin PSM</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">Kunjungan Gereja</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">Evaluasi Bulanan</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">Penerimaan anggota baru</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">Mengikuti Event</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">Mengadakan konser PSM</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">Refreshing PSM</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">Reorganisasi</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">Ephipania</div>
                <div class="program-item bg-white p-6 rounded-md shadow-md">IDG</div>
            </div>
        </div>

        <!-- Struktur Keanggotaan Section -->
        <div class="struktur-keanggotaan text-center mt-12 animate_animated animatefadeInUp animate_delay-2s">
            <h2 class="text-2xl font-semibold mb-6">Struktur Keanggotaan 2023/2024</h2>
            <div class="flex justify-center space-x-12">
                <div class="leader-item text-center">
                    <img src="psm.jpg" alt="Ketua Divisi" class="w-24 h-24 rounded-full mx-auto">
                    <p class="mt-4 font-semibold">Joy Lamtardas Manurung</p>
                    <p class="text-gray-600">Ketua UKM</p>
                </div>
                <div class="leader-item text-center">
                    <img src="psm.jpg" alt="Wakil Kepala Divisi" class="w-24 h-24 rounded-full mx-auto">
                    <p class="mt-4 font-semibold">Lusiana Silaen</p>
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


