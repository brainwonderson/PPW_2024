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
    <a href="{{ route('basket') }}" target="basket">
    <div class="relative group min-w-[250px] md:min-w-[200px] lg:min-w-[300px] animate-slide-up">
      <img src="{{ asset('image/basket.png') }}" alt="Basket" class="w-full h-auto object-cover rounded-lg shadow-lg cursor-pointer">
      <div class="text-center mt-2">
        <h3 class="text-lg font-semibold">Basket</h3>
      </div>
    </div>

    <!-- GDSC -->
    <a href="{{ route('GDSC') }}" target="GDSC">
    <div class="relative group min-w-[250px] md:min-w-[200px] lg:min-w-[300px] animate-slide-up">
      <img src="{{ asset('image/gdsc.png') }}" alt="GDSC" class="w-full h-auto object-cover rounded-lg shadow-lg cursor-pointer">
      <div class="text-center mt-2">
        <h3 class="text-lg font-semibold">GDSC</h3>
      </div>
    </div>

    <!-- Gitar -->
    <a href="{{ route('Gitar') }}" target="Gitar">
    <div class="relative group min-w-[250px] md:min-w-[200px] lg:min-w-[300px] animate-slide-up">
      <img src="{{ asset('image/gitar.png') }}" alt="Gitar" class="w-full h-auto object-cover rounded-lg shadow-lg cursor-pointer">
      <div class="text-center mt-2">
        <h3 class="text-lg font-semibold">Gitar</h3>
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
    <a href="{{ route('English') }}" target="English">
    <div class="relative group min-w-[250px] md:min-w-[200px] lg:min-w-[300px] animate-slide-up">
      <img src="{{ asset('image/english.png') }}" alt="English" class="w-full h-auto object-cover rounded-lg shadow-lg cursor-pointer">
      <div class="text-center mt-2">
        <h3 class="text-lg font-semibold">English</h3>
      </div>
    </div>

    <!-- 3DC -->
    <a href="/3DC" target="3DC">
    <div class="relative group min-w-[250px] md:min-w-[200px] lg:min-w-[300px] animate-slide-up">
      <img src="{{ asset('image/padus.png') }}" alt="3dc" class="w-full h-auto object-cover rounded-lg shadow-lg cursor-pointer">
      <div class="text-center mt-2">
        <h3 class="text-lg font-semibold">3dc</h3>
      </div>
    </div>
  </div>

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
