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
            <h1 class="text-4xl font-bold mb-4">DEPARTEMEN KETERTIBAN DAN KEDISIPLINAN</h1>
            <p class="text-gray-600 max-w-5zxl mx-auto">
                Departemen Ketertiban dan Kedisiplinan
                merupakan departemen yang berinteraksi langsung dan sangat akrab dengan mahasiswa/masiswi IT Del di lingkungan kampus. Departemen ini mengawasi proses jalannya ketertiban dan kedisiplinan mahasiswa/mahasiswi sesuai dengan peraturan dan regulasi yang berlaku di IT Del.        </div>

        <!-- Images and Description -->
        <div class="flex justify-center mb-12 space-x-4 animate__animated animate__fadeInUp animate__delay-1s">
            <div class="w-1/2 p-4">
                <img src="{{ asset('image/ketertiban.png') }}" alt="Department Logo" class="rounded-md mx-auto">
            </div>
            <div class="w-1/2 p-4">
                <img src="{{ asset('image/Depol_keg.jpg') }}" alt="Department Event" class="rounded-md mx-auto">
            </div>
        </div>

        <!-- Leaders Section -->
        <div class="text-center mb-12 animate__animated animate__fadeInUp animate__delay-2s">
            <div class="flex justify-center space-x-8">
                <div>
                <img src="{{ asset('image/pany.png') }}" alt="Leader 1" class="w-96 h-72 rounded-full mt-20">
                    <p class="text-lg font-bold">PANY MATONDANG</p>
                    <p>Kepala Divisi</p>

                </div>
                {{-- <div>
                    <img src="{{ asset('image/youni.png') }}" alt="Leader 2"  class="w-30 h-26 rounded-full float-left mb-4 mr-5">
                    <p class="text-lg font-bold">SALWA HARAHAP</p>
                    <p>Wakil Kepala Divisi</p>
                </div> --}}
            </div>
        </div>

        <!-- Program Kerja Section -->
        <div class="text-center mb-12 animate__animated animate__fadeInUp animate__delay-3s">
            <h2 class="text-3xl font-bold mb-8">PROGRAM KERJA</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Penyusunan Kalender KM</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Pembentukan Panitia PCA</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Pembubaran Panitia PCA</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Rapat Koordinasi bersama MPM</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Pemilihan Ketua Natal Ephipania</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">UKM Day</a>
            </div>
        </div>

@endsection
