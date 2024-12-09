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
        <h1 class="text-4xl font-bold mb-4">DEPARTEMEN HUBUNGAN DAN PENGABDIAN MASYARAKAT</h1>
        <p class="text-gray-600 max-w-3xl mx-auto">
        Departemen Hubungan dan Pengabdian Masyarakat (DHPM) berperan dalam memimpin acara yang diadakan oleh BEM IT Del, melakukan pengabdian kepada masyarakat sekitar, menangani hubungan luar kampus, serta membangun dan mempertahankan citra BEM sebagai komunitas yang baik dan bermanfaat baik secara internal maupun eksternal.
        </p>
    </div>

    <!-- Images and Description -->
    <div class="flex justify-center mb-12 space-x-4 animate_animated animatefadeInUp animate_delay-1s">
        <div class="w-1/2 p-4">
            <img src="{{ asset('image/DHPM.png') }}" alt="Department Logo" class="rounded-md mx-auto">
        </div>
        <div class="w-1/2 p-4">
            <img src="{{ asset('image/keg   dhpm.jpg') }}" alt="Department Event" class="rounded-md mx-auto">
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
            Mengadakan Rapat Rutin Internal Departemen HUMAS
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Program ini dilakukan secara rutin dengan jangka waktu sekali setiap bulannya.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
    
            <!-- Program Card 2 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Mengumpulkan Dana Jika Terjadi Bencana Alam di Sekitar Kampus IT Del dan Daerah Lainnya
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Program ini dilakukan untuk membantu masyarakat dalam mengatasi  bencana yang sedang dialami.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
    
            <!-- Program Card 3 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Mengumpulkan Barang yang Tidak Dipakai Lagi oleh Mahasiswa untuk Disumbangkan ke Panti Asuhan
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Program yang akan dilakukan HUMAS sebagai bentuk kepedulian mahasiswa IT Del terhadap kehidupan sosial di sekitar Tobasa.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>

            <!-- Program Card 4 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Membantu Mencari Sponsor dalam Kegiatan Besar yang Akan Dilakukan oleh BEM IT Del
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Akan membantu dana BEM IT Del dalam penyelenggaraan acara.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>

            <!-- Program Card 5 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Sponsor yang Akan Dilakukan Akan Membantu Dana BEM IT Del dalam Penyelenggaraan Acara dan Memperkenalkan IT Del Menjadi Semakin Luas di Instansi Perusahaan ataupun Yayasan
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Pengabdian kepada lingkungan sekitar kampus, seperti mengutip sampah yang berada di sekitar kampus IT Del.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
            
            <!-- Program Card 6 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Mengadakan Penyuluhan Terkait Kesadaran akan Sampah ke Sekolah-Sekolah di Balige dan Sekitarnya
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Program untuk menyampaikan kepada para siswa akan kesadaran terhadap sampah di lingkungan sekitar mereka.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>

            <!-- Program Card 7 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Mengadakan Kerjasama dengan Media Massa
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                Program untuk memperluas pengaruh del bukan hanya di daerah Tobasa, diharapkan dapat mencapai luar provinsi. 
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>

            <!-- Program Card 8 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Mengadakan Kerjasama dengan Pemerintah Tobasa
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Program untuk membangun kepedulian mahasiswa/i IT Del terhadap event yang diadakan di wilayah Tobasa dengan cara berpartisipasi.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>

            <!-- Program Card 9 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Mengadakan Donasi Buku
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Program untuk menggalang donasi buku dan mendistribusikannya ke rumah baca. 
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
