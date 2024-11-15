@extends('layouts.app')

@section('content')
<head>
    <!-- Tambahkan Animate.css jika kamu belum menginstalnya -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>


<div class="container mx-auto py-10">
    <!-- Header Section -->
    <div class="text-center mb-12 animate__animated animate__fadeIn">
        <h1 class="text-4xl font-bold mb-4">Del Dance Drama Club</h1>
        <p class="text-gray-600 max-w-3xl mx-auto">
        3DC merupakan singkatan dari Del Dance Drama Club. Secara baku, 3DC juga sering disebut PTM, yaitu Paduan Tari Mahasiswa 3DC adalah salah satu UKM  di bidang seni yang ada di Institut Teknologi Del. 3DC memiliki 3 divisi yaitu Modern Dance, Tradisional Dance, Drama. PTM atau 3DC sering berpartisipasi dalam berbagai kegiatan didalam kampus seperti IDG , IT Del fest bahkan kegiatan BEM maupun luar kampus seperti perlombaan.
        </p>
    </div>

    <!-- Images and Description -->
    <div class="flex justify-center mb-12 space-x-4 animate__animated animate__fadeInUp animate__delay-1s">
        <div class="w-1/2 p-4">
            <img src="{{ asset('image/DEPOL.png') }}" alt="Department Logo" class="rounded-md mx-auto w-fit h-80">
        </div>
        <div class="w-1/2 p-4">
            <img src="{{ asset('image/Depol_keg.jpg') }}" alt="Department Event" class="rounded-md mx-autow-fit h-80">
        </div>
    </div>

    <!-- Leaders Section -->
    <div class="flex justify-center space-x-10 text-center mb-12 animate__animated animate__fadeInUp animate__delay-2s">
        <div class="flex space-x-20 items-center">
            <div class="text-center ml-3 mb-5">
                <img src="{{ asset('image/ketua depol.jpg') }}" alt="Leader 1" class="w-72 rounded-full mb-5 mx-auto">
                <p class="text-lg font-bold">Markus Hutagalung</p>
                <p>Kepala Divisi</p>
            </div>
            <div class="text-center mb-10">
                <img src="{{ asset('image/wakil.jpg') }}" alt="Leader 2" class="w-72 rounded-full mb-4 mx-auto">
                <p class="text-lg font-bold">SALWA HARAHAP</p>
                <p>Wakil Kepala Divisi</p>
            </div>
        </div>
    </div>

    <!-- Program Kerja Section -->
    <div class="text-center mb-12 animate__animated animate__fadeInUp animate__delay-3s">
        <h2 class="text-3xl font-bold mb-8">PROGRAM KERJA</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Inaugurasi, Dies Natalis dan Gradiation (IDG)</a>
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Pembukaan & Penutupan KM Cup</a>
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Festival Budaya</a>
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">UKM Day</a>
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Latihan Rutin Anggota 3dc</a>
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Penerimaan Anggota 3dc</a>
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Evaluasi Anggota 3dc</a>
            <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">IT Del Fest</a>
        </div>
    </div>
</div>


@endsection


