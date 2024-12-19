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
    @if($data->isEmpty())
    <div class="text-center mb-12 animate__animated animate__fadeIn">
        <h1 class="text-4xl font-bold mb-4">Departemen Agama dan Sosial</h1>
        <p class="text-gray-600 max-w-3xl mx-auto">
        Departemen Agama dan Sosial merupakan departemen yang berperan dalam kegiatan keagamaan dan sosial, berkolaborasi dalam keanekaragaman di kampus.
        </p>
    </div>
    @else
    <div class="text-center mb-12 animate__animated animate__fadeIn">
        <h1 class="text-4xl font-bold mb-4">{{ $data->nama }}</h1>
        <p class="text-gray-600 max-w-3xl mx-auto">
            {{ $data->deskripsi }}
        </p>
    </div>
    @endif

    <!-- Images and Description -->
    <div class="flex justify-center mb-12 space-x-4 animate_animated animatefadeInUp animate_delay-1s">
        <div class="w-1/2 p-4">
            <img src="{{ asset('image/logodepag.png') }}" alt="Department Logo" class="rounded-md mx-auto">
        </div>
        <div class="w-1/2 p-4">
            <img src="{{ asset('image/prodeg.png') }}" alt="Department Event" class="rounded-md mx-auto">
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
                Ibadah Jumat
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Ibadah yang rutin dilakukan oleh umat Kristiani pada hari Jumat.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
    
            <!-- Program Card 2 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Weekly Reflection
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Meng-email renungan singkat dan pertanyaan tentang isi renungan tersebut kepada setiap mahasiswa pada awal minggu. 
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
    
            <!-- Program Card 3 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Sharing Session
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Pertemuan keluarga dan sharing session sesama muslim serta memberikan apresiasi berupa door prize bagi mahasiswa yang hapal ayat Al-quran.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>

            <!-- Program Card 4 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Pengajian
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Belajar ilmu agama bersama seorang Alim yang merupakan bentuk ibadah yang wajib bagi setiap Muslim.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>

            <!-- Program Card 5 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Ibadah Misa
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Ibadah yang rutin dilakukan oleh mahasiswa yang beragama Katolik.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
            
            <!-- Program Card 6 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                FMR
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Diikuti oleh seluruh mahasiswa dan setiap peserta akan menyanyikan lagu Rohani yang ditentukan oleh Departemen Agama dan Sosial.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>

            <!-- Program Card 7 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Bakti Paskah
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Kegiatan sosial berupa pembuatan kotak tabungan di asrama yang akan diisi oleh mahasiswa dan dibongkar dalam waktu yang ditentukan.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>

            <!-- Program Card 8 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Hoppin' into Easter
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Games di pagi hari sebelum ibadah paskah yang juga diselingi oleh penampilan dari tiap-tiap himpunan.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>

            <!-- Program Card 9 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Jalan Salib
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Pawai mahasiswa Kristen dan civitas Del dari kampus ke lokasi ibadah.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>

            <!-- Program Card 10 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Charity x Aksi Peduli
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Penyelenggaraan kesejahteraan sosial yang dikumpulkan oleh seluruh civitas Del dan bekerjasama dengan Departemen Hubungan dan Pengabdian Masyarakat.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>

            <!-- Program Card 11 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Hari Besar Agama Islam
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                Memperingati hari besar Agama Islam, yaitu: Maulid Nabi Muhammad, Isra' mi'raj, Hari raya Idul Fitri.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
