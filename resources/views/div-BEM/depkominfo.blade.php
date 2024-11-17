@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">DEPARTEMEN KOMUNIKASI DAN INFORMASI</h1>
            <p class="text-gray-600 max-w-5zxl mx-auto">
            Berperan dalam menanggungjawabi kepentingan komunikasi dan informasi, jembatan antar departemen, dan memanfaatkan media komunikatif sebagai pusat informasi keorganisasian.            </p>
        </div>

        <!-- Images and Description -->
        <div class="flex justify-center mb-12">
            <div class="w-1/2 p-4">
                <img src="{{ asset('image/logodepko.Jpg') }}" alt="Department Logo" class="rounded-md mx-auto">
            </div>
            <div class="w-1/4 p-5">
                <img src="{{ asset('image/prodepko.Jpg') }}" alt="Department Event" class="rounded-md mx-auto">
            </div>
        </div>

        <!-- Leaders Section -->
        <div class="text-center mb-12">
            <div class="flex justify-center space-x-8">
                <div>
                <img src="{{ asset('image/ketua depko.Jpg') }}" alt="Leader 1" class="w-30 h-30 rounded-full float-left mb-4 mr-5 ml-15">
                    <p class="text-lg font-bold">ARCHICO SEMBIRING</p>
                    <p>Kepala Divisi</p>

                </div>
                <div>
                    
                </div>
            </div>
        </div>

        <!-- Program Kerja Section -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-8">PROGRAM KERJA</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300"></a>
                <a href="#" class="bg-gray-200 p-6 rounded-lg text-center hover:bg-gray-300"></a>

            </div>
        </div>

@endsection
