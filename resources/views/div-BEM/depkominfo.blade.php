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
                <img src="{{ asset('image/depkominfo rame.jpg') }}" alt="Department Event" class="rounded-md mx-auto w-auto h-80">
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
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Mendokumentasikan setiap event yang diadakan oleh BEM IT Del</a>
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Merancang dan Membuat Desain Template serta Postingan di Media Sosial BEM IT Del</a>
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Membuat Publikasi Visual di Poster Kegiatan atau Kompetisi</a>
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Mengelola Sosial Media IT Del</a>
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Mengelola Segala Informasi yang Ada di Sosial Media dan di IT Del</a>
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Mengembangkan dan Memelihara Sistem Informasi yang Berhubungan Dengan KM IT Del</a>
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Menanggungjawabi Informasi yang Diberikan pada Sistem Informasi KM IT Del</a>
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Melayani Setiap Permintaan Data dan Informasi oleh Setiap Unit KM IT Del</a>
        </div>
    </div>
</div>

@endsection
