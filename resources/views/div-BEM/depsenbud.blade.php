@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">DEPARTEMEN SENI DAN BUDAYA</h1>
            <p class="text-gray-600 max-w-5zxl mx-auto">
            Departemen Seni dan Budaya (DEPSENBUD) adalah penyedia wadah untuk mahasiswa/i IT Del untuk mengembangkan kemampuan dalam bidang seni juga berperan dalam hal menjaga kebudayaan yang dianut di kampus. Departemen ini akan selalu mengambil tema acara yang memiliki sangkut paut dengan kesenian & kebudayaan            </p>
        </div>

        <!-- Images and Description -->
        <div class="flex justify-center mb-12">
            <div class="w-1/2 p-4">
                <img src="{{ asset('image/logodepsen.png') }}" alt="Department Logo" class="rounded-md mx-auto">
            </div>
            <div class="w-1/2 p-4">
                <img src="{{ asset('image/prodeg.png') }}" alt="Department Event" class="rounded-md mx-auto">
            </div>
        </div>

        <!-- Leaders Section -->
        <div class="text-center mb-12">
            <div class="flex justify-center space-x-8">
                <div>
                <img src="{{ asset('image/theo.png') }}" alt="Leader 1" class="w-96 h-80 rounded-full float-left mx-7">
                    <p class="text-lg font-bold">Theo Hosea Manullang</p>
                    <p>Kepala Divisi</p>

                </div>
                <div>
                    <img src="{{ asset('image/Richard.png') }}" alt="Leader 2"  class="w-30 h-26 rounded-full float-left mx-7">
                    <p class="text-lg font-bold">Richard</p>
                    <p>Wakil Kepala Divisi</p>
                </div>
            </div>
        </div>

        <!-- Program Kerja Section -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-8">PROGRAM KERJA</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Festival Budaya</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Del ART Competition</a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300">Makrab</a>

            </div>
        </div>

@endsection
