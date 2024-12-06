@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<!-- Navbar -->
<nav class="bg-gray-900 text-white w-full fixed top-0 left-0 z-50 shadow-md">
</nav>
<!-- Section dengan background-->
<section class="w-full bg-blue-100 py-20">
    <div class="container mx-auto flex flex-col md:flex-row items-start md:space-x-10">
        <!-- Bagian Teks -->
        <div class="w-full md:w-2/3 text-left mb-10">
            <h2 class="text-32xl font-bold py-15 px-5 animate-fade-in">Sejarah</h2>
            <p class="text-black-600 mt-5 px-5 animate-fade-in">
                Institut Teknologi Del (IT Del) didirikan pada tahun 2001 di Laguboti, Sumatera Utara, dengan tujuan menjadi pusat pendidikan unggul di bidang teknologi dan rekayasa. IT Del bertujuan untuk mencetak lulusan yang tidak hanya kompeten di bidang akademis, tetapi juga memiliki integritas tinggi dan semangat pelayanan kepada masyarakat. Dengan visi "Menjadi Perguruan Tinggi Berkualitas Dunia yang Berlandaskan Nilai Kearifan Lokal", IT Del terus berkembang menjadi salah satu institusi pendidikan terkemuka di Indonesia.
                <br><br>
                Badan Eksekutif Mahasiswa (BEM) IT Del adalah organisasi mahasiswa yang mewakili seluruh mahasiswa di Institut Teknologi Del (IT Del). Kami berdedikasi untuk menjadi ruang aspirasi, inovasi, dan pengembangan diri bagi mahasiswa, serta berperan dalam membangun lingkungan kampus yang inklusif, dinamis, dan berorientasi pada perubahan positif.
            </p>
        </div>

        <!-- Bagian Gambar -->
        <div class="w-full md:w-1/3 flex justify-center md:justify-end items-center mt-6 md:mt-0">
            <img src="{{ asset('image/about.png') }}" alt="Samuel Simbolon" 
                 class="w-50 h-50 md:w-70 md:h-64 mx-auto md:mt-10 md:mb-5 no-border">
        </div>
    </div>    
</section>

<!-- Program Unit Kegiatan Mahasiswa -->
<h2 class="text-center text-3xl font-bold mt-10 animate-fade-in">Program Unit Kegiatan Mahasiswa</h2>

<!-- Main Content -->
<div class="container mx-auto p-6 pt-24 relative">
  <!-- Slider container with horizontal scrolling -->
  <div id="slider" class="flex space-x-6 overflow-x-auto scrollbar-hide scroll-smooth">
    <!-- Identity Design Section -->
    <a href="{{ route('basket') }}">
    <div class="relative group min-w-[250px] md:min-w-[200px] lg:min-w-[300px] animate-slide-up">
      <img src="{{ asset('image/basket.png') }}" alt="Basket" class="w-full h-auto object-cover rounded-lg shadow-lg cursor-pointer">
      <div class="text-center mt-2">
        <h3 class="text-lg font-semibold">Basket</h3>
      </div>
    </div>

    <!-- GDSC -->
    <a href="{{ route('GDSC') }}">
    <div class="relative group min-w-[250px] md:min-w-[200px] lg:min-w-[300px] animate-slide-up">
      <img src="{{ asset('image/gdsc.png') }}" alt="GDSC" class="w-full h-auto object-cover rounded-lg shadow-lg cursor-pointer">
      <div class="text-center mt-2">
        <h3 class="text-lg font-semibold">GDSC</h3>
      </div>
    </div>

    <!-- Gitar -->
    <a href="{{ route('Gitar') }}">
    <div class="relative group min-w-[250px] md:min-w-[200px] lg:min-w-[300px] animate-slide-up">
      <img src="{{ asset('image/gitar.png') }}" alt="Gitar" class="w-full h-auto object-cover rounded-lg shadow-lg cursor-pointer">
      <div class="text-center mt-2">
        <h3 class="text-lg font-semibold">PGM</h3>
      </div>
    </div>

    <!-- PSM -->
    <a href="{{ route('Psm') }}" target="Psm">
    <div class="relative group min-w-[250px] md:min-w-[200px] lg:min-w-[300px] animate-slide-up">
      <img src="{{ asset('image/padus.png') }}" alt="PSM" class="w-full h-auto object-cover rounded-lg shadow-lg cursor-pointer">
      <div class="text-center mt-2">
        <h3 class="text-lg font-semibold">PSM</h3>
      </div>
    </div>

    <!-- English -->
    <a href="{{ route('English') }}">
    <div class="relative group min-w-[250px] md:min-w-[200px] lg:min-w-[300px] animate-slide-up">
      <img src="{{ asset('image/english.png') }}" alt="English" class="w-full h-auto object-cover rounded-lg shadow-lg cursor-pointer">
      <div class="text-center mt-2">
        <h3 class="text-lg font-semibold">English</h3>
      </div>
    </div>

    <!-- 3DC -->
    <a href="{{ route('3DC') }}">
    <div class="relative group min-w-[250px] md:min-w-[200px] lg:min-w-[300px] animate-slide-up">
      <img src="{{ asset('image/3dc.png') }}" alt="3dc" class="w-full h-auto object-cover rounded-lg shadow-lg cursor-pointer w-96 h-96">
      <div class="text-center mt-2">
        <h3 class="text-lg font-semibold">3dc</h3>
      </div>
    </div>
  </div>

  <section class="w-full py-16 bg-gray-100">
    <div class="container mx-auto flex flex-col md:flex-row md:space-x-10 items-start">
    <section class="w-full py-16 bg-gray-100">
    <div class="container mx-auto flex flex-col md:flex-row md:space-x-10 items-start">
    <section class="w-full py-16 bg-gray-100">
    <div class="container mx-auto flex flex-col items-start">
    <section class="w-full py-16 bg-gray-100">
    <div class="container mx-auto flex flex-col items-start">
        <!-- Profil Kemahasiswaan -->
        <div class="w-full md:flex md:space-x-10 items-start">
            <div class="w-full md:w-1/2 flex flex-col justify-center">
                <h2 class="text-center text-3xl font-bold text-gray-900 pb-5 animate-fade-in">
                    Profil Kemahasiswaan
                    <span class="block w-18 h-2 mx-auto bg-yellow-500 mt-2"></span>
                </h2>
                <p class="text-justify text-gray-800 text-lg md:text-xl mt-8 leading-relaxed px-6 md:px-1">
                    Bidang Kemahasiswaan IT Del dikelola oleh Wakil Rektor Bidang Akademik dan Kemahasiswaan. Bidang ini bertanggung jawab atas kesejahteraan mahasiswa serta pengembangan potensi mereka melalui berbagai kegiatan dan layanan, seperti administrasi akademik, pengembangan karir, serta pembinaan karakter. Dengan komitmen untuk menghasilkan lulusan yang berdaya saing global dan berjiwa kepemimpinan, bidang kemahasiswaan IT Del menjadi salah satu pilar penting dalam pengelolaan dan pemberdayaan mahasiswa.
                </p>
            </div>
 
            <!-- Struktur Organisasi -->
            <div class="w-full md:w-1/2 flex flex-col items-center animate-fade-in">
                <h2 class="text-center text-2xl font-bold text-gray-800 pb-3">
                    Struktur Organisasi
                    <span class="block w-16 h-1 mx-auto bg-yellow-500 mt-2"></span>
                </h2>
                <div class="mt-6 flex flex-col items-center">
                    <!-- Ukuran gambar rektor yang lebih kecil -->
                    <img src="{{ asset('image/rektor.png') }}" 
                         alt="Rektor IT Del" 
                         style="width: 20%" 
                         class="w-24 h-24 rounded-lg shadow-md"> <!-- Ukuran lebih kecil -->
                    <div class="text-center mt-4">
                        <h3 class="text-xl font-bold text-gray-800">Dr. Arnaldo Marulitua Sinaga, ST., M.InfoTech</h3>
                        <p class="text-gray-600 font-semibold">REKTOR</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Diagram Organisasi di Bawah -->
        <div class="w-full flex justify-center mt-12">
            <img src="{{ asset('image/diagram.png') }}" 
                 alt="Diagram Organisasi" 
                 class="w-full md:w-3/4 lg:w-2/3 h-auto shadow-lg">
        </div>
    </div>
</section>


<!-- Custom CSS for animations and to hide default scrollbar -->
<style>
  .scrollbar-hide::-webkit-scrollbar {
    display: none;
  }
  .scrollbar-hide {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
  }
  
  /* Fade-in animation */
  @keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
  }
  .animate-fade-in {
    animation: fadeIn 1s ease-in-out;
  }
  
  /* Slide-up animation */
  @keyframes slideUp {
    from { transform: translateY(20px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
  }
  .animate-slide-up {
    animation: slideUp 1s ease-in-out;
  }
</style>

@endsection