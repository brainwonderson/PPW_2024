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
        <h1 class="text-4xl font-bold mb-4">DEPARTEMEN SENI DAN BUDAYA</h1>
            <p class="text-gray-600 max-w-5zxl mx-auto">
            Departemen Seni dan Budaya (DEPSENBUD) adalah penyedia wadah untuk mahasiswa/i IT Del untuk mengembangkan kemampuan dalam bidang seni juga berperan dalam hal menjaga kebudayaan yang dianut di kampus. Departemen ini akan selalu mengambil tema acara yang memiliki sangkut paut dengan kesenian & kebudayaan            </p>
        </div>

        <!-- Images and Description -->
        <div class="flex justify-center mb-12 space-x-4 animate__animated animate__fadeInUp animate__delay-1s">
            <div class="w-1/2 p-4">
                <img src="{{ asset('image/logodepsen.png') }}" alt="Department Logo" class="rounded-md mx-auto w-100 h-300">
            </div>
            <div class="w-1/2 p-4">
                <img src="{{ asset('image/depsenbud.jpg') }}" alt="Department Event" class="rounded-md mx-auto">
            </div>
        </div>

        <!-- Leaders Section -->
        <div class="text-center mb-12 animate__animated animate__fadeInUp animate__delay-2s">
            <div class="flex justify-center space-x-8">
                <div class="text-center">
                <img src="{{ asset('image/theo.png') }}" alt="Leader 1" class="w- h-80 rounded-full float-left mx-7">
                    <p class="text-lg font-bold">Theo Hosea Manullang</p>
                    <p>Kepala Divisi</p>

                </div>
                {{-- <div class="text-center">
                    <img src="{{ asset('image/wakdepsenbud.jpg') }}" alt="Leader 2"  class=" w-7 h-11 rounded-full float-left mx-7">
                    <p class="text-lg font-bold">Salomo</p>
                    <p>Wakil Kepala Divisi</p>
                </div> --}}
            </div>
        </div>

        <!-- Program Kerja Section -->
        <div class="text-center mb-12 animate__animated animate__fadeInUp animate__delay-3s">
            <h2 class="text-3xl font-bold mb-8">PROGRAM KERJA</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Festival Budaya</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Del ART Competition</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Makrab</a>

            </div>
        </div>

@endsection
