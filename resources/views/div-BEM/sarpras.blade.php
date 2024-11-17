@extends('layouts.app')

@section('content')
<head>
    <!-- Tambahkan Animate.css jika kamu belum menginstalnya -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>


<div class="container mx-auto py-10">
    <!-- Header Section -->
    <div class="text-center mb-12 animate__animated animate__fadeIn">
        <h1 class="text-4xl font-bold mb-4">DEPARTEMEN SARANA DAN PRASARANA</h1>
        <p class="text-gray-600 max-w-3xl mx-auto">
            Bertanggung jawab dalam penyedia alat dan keperluan yang mungkin dibutuhkan dalam kegiatan departemen departemen lain
        </p>
    </div>

    <!-- Images and Description -->
    <div class="flex justify-center mb-12 space-x-4 animate__animated animate__fadeInUp animate__delay-1s">
        <div class="w-1/2 p-4">
            <img src="{{ asset('image/Sarpras.png') }}" alt="Department Logo" class="rounded-md mx-auto w-auto h-96">
        </div>
        <div class="w-1/2 p-4">
            <img src="{{ asset('image/sarpras_keg.jpg') }}" alt="Department Event" class="rounded-md mx-auto w-auto h-96">
        </div>
    </div>

    <!-- Leaders Section -->
    <div class="text-center mb-12 animate__animated animate__fadeInUp animate__delay-2s">
        <div class="flex justify-center space-x-16">
            <div class="text-center">
                <img src="{{ asset('image/joseph.png') }}" alt="Leader 1" class="h-30 w-30 rounded-full mb-4 mx-auto">
                <p class="text-lg font-bold">JOSEPH NAPITUPULU</p>
                <p>Kepala Divisi</p>
            </div>
            <div class="text-center">
                <img src="{{ asset('image/youni.png') }}" alt="Leader 2" class="h-30 w-30 rounded-full mb-4 mx-auto">
                <p class="text-lg font-bold">YUNI LIMBAN TOBING</p>
                <p>Wakil Kepala Divisi</p>
            </div>
        </div>
    </div>

    <!-- Program Kerja Section -->
    <div class="text-center mb-12 animate__animated animate__fadeInUp animate__delay-3s">
        <h2 class="text-3xl font-bold mb-8">PROGRAM KERJA</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300 transition transform duration-300 hover:scale-105">Pendataan Alat Musik yang Tersedia</a>
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300 transition transform duration-300 hover:scale-105">Merawat Kebersihan Ruangan SARPRAS</a>
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300 transition transform duration-300 hover:scale-105">Pengadaan Barang dan Alat Musik</a>
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300 transition transform duration-300 hover:scale-105">Peminjaman Alat, Barang, dan Studio Musik</a>
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300 transition transform duration-300 hover:scale-105">Pelatihan dan Maintenance</a>
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300 transition transform duration-300 hover:scale-105">Mrnonton Bersama</a>
        </div>
    </div>
</div>


@endsection
