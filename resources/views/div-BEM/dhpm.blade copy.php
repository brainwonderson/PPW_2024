@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">DEPARTEMEN HUBUNGAN DAN PENGABDIAN MASYARAKAT</h1>
            <p class="text-gray-600 max-w-5zxl mx-auto">
            Berperan dalam memimpin acara yang diadakan oleh BEM IT Del, melakukan pengabdian kepada masyarakat sekitar, menangani hubungan luar kampus, serta membangun dan mempertahankan citra BEM sebagai komunitas yang baik dan bermanfaat baik secara internal maupun eksternal </p>
        </div>

        <!-- Images and Description -->
        <div class="flex justify-center mb-12">
            <div class="w-1/2 p-4">
                <img src="{{ asset('image/DHPM.png') }}" alt="Department Logo" class="rounded-md mx-auto">
            </div>
            <div class="w-1/2 p-4">
                <img src="{{ asset('image/keg dhpm.jpg') }}" alt="Department Event" class="rounded-md mx-auto">
            </div>
        </div>

        <!-- Leaders Section -->
        <div class="text-center mb-12">
            <div class="flex justify-center space-x-8">
                <div>
                <img src="{{ asset('image/joseph.png') }}" alt="Leader 1" class="w-30 h-30 rounded-full float-left mb-4 mr-5 ml-15">
                    <p class="text-lg font-bold">SITOGAB ANTONIO GIRSANG</p>
                    <p>Kepala Divisi</p>

                </div>
                <div>
                    <img src="{{ asset('image/dhpm wakil.jpg') }}" alt="Leader 2"  class="w-30 h-26 rounded-full float-left mb-4 mr-5">
                    <p class="text-lg font-bold">GABRIEL SIGALINGGING</p>
                    <p>Wakil Kepala Divisi</p>
                </div>
            </div>
        </div>

        <!-- Program Kerja Section -->
        <div class="text-center mb-12">
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
