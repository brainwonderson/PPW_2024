@extends('layouts.app')

@section('content')
<head>
    
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
        <h1 class="text-4xl font-bold mb-4">DEPARTEMEN SENI DAN BUDAYA</h1>
        <p class="text-gray-600 max-w-3xl mx-auto">
        Departemen Seni dan Budaya (DEPSENBUD) adalah penyedia wadah untuk mahasiswa/i IT Del untuk mengembangkan kemampuan dalam bidang seni juga berperan dalam hal menjaga kebudayaan yang dianut di kampus. Departemen ini akan selalu mengambil tema acara yang memiliki sangkut paut dengan kesenian & kebudayaan.
        </p>
    </div>

    <!-- Images and Description -->
    <div class="flex justify-center mb-12 space-x-4 animate_animated animatefadeInUp animate_delay-1s">
        <div class="w-1/2 p-4">
            <img src="{{ asset('image/logodepsen.png') }}" alt="Department Logo" class="rounded-md mx-auto ">
        </div>
        <div class="w-1/2 p-4">
            <img src="{{ asset('image/depsenbud.jpg') }}" alt="Department Event" class="rounded-md mx-auto pt-8">
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
            Cover Online
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Tiap anggota Depsenbud akan mengupload bakat yang dimiliki dan mengupload ke social media Depsenbud.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
    
            <!-- Program Card 2 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Podcast
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Tiap anggota Depsenbud akan mewawancarai narasumber dari setiap departemen dan Himpunan Mahasiswa.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
    
            <!-- Program Card 3 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Del Music Corner
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Acara diisi setiap mahasiswa yang ingin tampil dengan tema-tema yang berbeda setiap bulannya berkaitan dengan nusantara dan budaya.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>

            <!-- Program Card 4 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Festival Budaya
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Wadah untuk mengingatkan kembali megenai keberagaman budaya Indonesia.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>

            <!-- Program Card 5 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Del Art Competition
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Acara untuk menambahkan softskill Mahasiswa yang berguna untuk menghadapi Industri 4.0, dengan mengangkat tema : Corak Nusantara.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
            
            <!-- Program Card 6 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Konser
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                Pertunjukan langsung, biasanya musik, di depan civitas akademika IT Del. 
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>

            <!-- Program Card 7 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Makrab
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Bertujuan untuk lebih mengenal antar anggota dalam Depsenbud. 
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
