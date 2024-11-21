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
            <p class="text-gray-600 max-w-5xl mx-auto">
            Berperan dalam memimpin acara yang diadakan oleh BEM IT Del, melakukan pengabdian kepada masyarakat sekitar, menangani hubungan luar kampus, serta membangun dan mempertahankan citra BEM sebagai komunitas yang baik dan bermanfaat baik secara internal maupun eksternal </p>
        </div>

        <!-- Images and Description -->
        <div class="flex justify-center mb-12 space-x-4 animate__animated animate__fadeInUp animate__delay-1s">
            <div class="w-1/2 p-4">
                <img src="{{ asset('image/DHPM.png') }}" alt="Department Logo" class="rounded-md mx-auto w-auto h-96">
            </div>
            <div class="w-1/2 p-4">
                <img src="{{ asset('image/keg dhpm.jpg') }}" alt="Department Event" class="rounded-md mx-auto w-auto h-96">
            </div>
        </div>

        <!-- Leaders Section -->
        <div class="text-center mb-12 animate__animated animate__fadeInUp animate__delay-2s">
            <div class="flex justify-center space-x-16">
                <div class="text-center ml-3 mb-1">
                    <img src="{{ asset('image/togab.png') }}" alt="Leader 1" class="w-72 rounded-full mt-20">
                    <p class="text-lg font-bold">SITOGAB GIRSANG</p>
                    <p>Kepala Divisi</p>
                </div>
                <div class="text-center my-2">
                    <img src="{{ asset('image/dhpmwakil.png') }}" alt="Leader 2" class="w-72 rounded-full -mt-10">
                    <p class="text-lg font-bold">GABRIEL SIGALINGGING</p>
                    <p>Wakil Kepala Divisi</p>
                </div>
            </div>
        </div>

        <!-- Program Kerja Section -->
        <div class="text-center mb-12 animate__animated animate__fadeInUp animate__delay-3s">
            <h2 class="text-3xl font-bold mb-8">PROGRAM KERJA</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Mengadakan rapat rutin internal</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Mengumpulkan dana jika terjadi bencana alam</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Membantu mencari sponsor untuk kegiatan besar BEM IT DEL</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Mengadakan peduli lingkungan sekitar kampus</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Mengadakan penyuluhan terkait kesadaran akan sampah</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Mengadakan kerjasama dengan media massa</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Mengadakan kerjasama dengan pemerintah Tobasa</a>
            </div>
        </div>

@endsection
