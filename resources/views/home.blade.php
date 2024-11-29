@extends('layouts.app')

@section('content')
<div class="parallax bg-cover bg-center h-screen relative" style="background-image: url('{{ asset('image/del.jpg') }}')">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="container mx-auto h-full flex flex-col justify-end items-start relative z-10 text-white text-left p-10">
        <h1 class="text-4xl font-bold mb-10">BEM INSTITUT TEKNOLOGI DEL</h1>
        <h2 class="text-2xl mb-10">KABINET SAHALA SAUDURAN 2023/2024</h2>
        <a href="#" class="mb-9 px-6 py-3 bg-blue-500 hover:bg-blue-700 text-white rounded">What we do</a>
    </div>
</div>


<div class="container mx-auto my-10">
    <h3 class="text-3xl font-bold text-center mt-20">Landasan</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      
      <!-- Card Martuhan -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden text-center">
        <img src="https://img.freepik.com/free-photo/praying-hands-with-faith-religion-belief-god-power-hope-devotion_79161-710.jpg?size=626&ext=jpg" 
             alt="Martuhan Image" class="w-full h-48 object-cover">
        <div class="p-5">
          <h5 class="text-xl font-bold mb-2">Martuhan</h5>
          <p class="text-gray-700">“Kasihinilah Tuhan Allahmu, dengan segenap hatimu dan dengan segenap jiwamu dan dengan segenap akal budimu.”</p>
        </div>
      </div>
      
      <!-- Card Marroha -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden text-center">
        <img src="{{ asset('image/marroha.jpeg') }}" 
             alt="Marroha Image" class="w-full h-48 object-cover">
        <div class="p-5">
          <h5 class="text-xl font-bold mb-2">Marroha</h5>
          <p class="text-gray-700">“Ajarlah kami menghitung hari-hari kami sedemikian, hingga kami beroleh hati yang bijaksana.”</p>
        </div>
      </div>
      
      <!-- Card Marbisuk -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden text-center">
        <img src="{{ asset('image/marbisuk.jpg') }}" 
             alt="Marbisuk Image" class="w-full h-48 object-cover">
        <div class="p-5">
          <h5 class="text-xl font-bold mb-2">Marbisuk</h5>
          <p class="text-gray-700">“Berbahagialah orang yang mendapat hikmat, orang yang memperoleh kepandaian.”</p>
        </div>
      </div>
  
    </div>
  </div>
  


    <!-- Bagian Visi dan Misi -->
<section class="bg-yellow-100 py-20 mt-10">
    <div class="container mx-auto text-left px-4 md:px-8">
        <h2 class="text-3xl md:text-4xl font-bold mb-10 text-center md:text-left">VISI & MISI</h2>

        <div class="flex flex-wrap md:flex-nowrap justify-between items-start">
            <!-- Visi -->
            <div class="w-full md:w-2/3 p-5">
                <h3 class="text-2xl md:text-4xl roboto mb-4">VISI</h3>
                <p class="text-gray-800 font-semibold">
                    Mewujudkan Badan Eksekutif Mahasiswa IT Del yang lebih baik melalui partisipasi aktif mahasiswa dalam berbagai aspek kehidupan kampus dan masyarakat serta mendengar segala bentuk aspirasi Mahasiswa.
                </p>
            </div>
            <!-- Foto Ketua di sebelah kanan -->
            <div class="w-full md:w-1/3 flex justify-center md:justify-end items-center mt-6 md:mt-0">
                <div class="text-center">
                    <img src="{{ asset('image/newsamuel.png') }}" alt="Samuel Simbolon" class="w-48 h-48 md:w-64 md:h-64  mx-auto">
                    <p class="mt-2 text-lg">Rony, Ketua BEM 2023/2024</p>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap md:flex-nowrap justify-between items-start mt-10">
            <!-- Foto Wakil Ketua di sebelah kiri -->
            <div class="w-full md:w-1/3 flex justify-center md:justify-start items-center mb-6 mr-20 md:mb-0 mr-5">
                <div class="text-center">
                    <img src="{{ asset('image/newrony.png') }}" alt="Bayu Peter Bukit" class="w-48 h-48  md:w-64 md:h-64  mb-25 ml-10">
                    <p class="mt-2 text-lg">Samuel, Wakil Ketua BEM 2023/2024</p>
                </div>
            </div>
            <!-- Misi -->
            <div class="w-full md:w-2/3 pr-0 md:pr-10">
                <h3 class="text-2xl md:text-4xl font-semibold mb-4">MISI</h3>
                <ul class="text-gray-700 list-disc list-inside space-y-2">
                    <li>Mewakili suara mahasiswa dan memperjuangkan kepentingan mahasiswa di tingkat kampus dan nasional.</li>
                    <li>Menyelenggarakan berbagai kegiatan yang bermanfaat dan menarik untuk kemajuan akademik, sosial, dan keagamaan mahasiswa.</li>
                    <li>Membangun jaringan kerjasama dengan lembaga di dalam dan luar kampus untuk meningkatkan kualitas dan kuantitas kegiatan BEM.</li>
                    <li>Meningkatkan partisipasi mahasiswa dalam kegiatan organisasi, baik sebagai peserta maupun pengurus.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
{{-- <style>
    .parallax {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style> --}}

    <!-- Bagian Departemen -->
    <section class="container mx-auto py-20">
        <h2 class="text-3xl font-bold text-center mb-10">DEPARTEMEN</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- departemen -->
            <a class="bg-blue-100 p-6 rounded-lg shadow-lg text-center transform transition duration-300 hover:scale-105 cursor-pointer" href="/diptek">
                <img src="{{ asset('image/diptek.jpg') }}" alt="Departemen 1" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Departemen Ilmu Pengetahuan dan Teknologi</h3>
                <p class="text-gray-600">Mengelola bidang ilmu pengetahuan dan teknologi, membantu meningkatkan minat akademik mahasiswa ITDel.</p>
            </a>

            <a class="bg-blue-100 p-6 rounded-lg shadow-lg text-center transform transition duration-300 hover:scale-105 cursor-pointer" href="/depagsos">
                <img src="{{ asset('image/depagsos.png') }}" alt="Departemen 2" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Departemen Agama dan Sosial</h3>
                <p class="text-gray-600">Berperan dalam kegiatan keagamaan dan sosial, berkolaborasi dalam keanekaragaman di kampus.</p>
            </a>

            <div class="bg-blue-100 p-6 rounded-lg shadow-lg text-center transform transition duration-300 hover:scale-105 cursor-pointer"">
                <img src="{{ asset('image/Depsenbud.png') }}" alt="Departemen 3" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Departemen Seni dan Budaya</h3>
                <p class="text-gray-600">Menumbuhkan dan memelihara kebudayaan dan seni di kalangan mahasiswa ITDel.</p>
            </div>

            <div class="bg-blue-100 p-6 rounded-lg shadow-lg text-center transform transition duration-300 hover:scale-105 cursor-pointer"">
                <img src="{{ asset('image/DEPKEBDIS.png') }}" alt="Departemen 2" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Departemen Ketertiban dan Kedisplinan</h3>
                <p class="text-gray-600"> Departemen ini mengawasi proses jalannya ketertiban dan kedisiplinan mahasiswa/mahasiswi sesuai dengan peraturan dan regulasi yang berlaku di IT Del.</p>
            </div>

            <div class="bg-blue-100 p-6 rounded-lg shadow-lg text-center transform transition duration-300 hover:scale-105 cursor-pointer"">
                <img src="{{ asset('image/Depkominfo.png') }}" alt="Departemen 2" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Departemen Komunikasi dan Informasi</h3>
                <p class="text-gray-600">Departemen Komunikasi dan Informasi 
                    merupakan departemen yang menanggungjawabi kepentingan komunikasi dan informasi, jembatan antar departemen, dan memanfaatkan media komunikatif sebagai pusat informasi keorganisasian.</p>
            </div>

            <div class="bg-blue-100 p-6 rounded-lg shadow-lg text-center transform transition duration-300 hover:scale-105 cursor-pointer">
                <img src="{{ asset('image/DPDK.png') }}" alt="Departemen 2" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Departemen Pusat Dalam Kampus</h3>
                <p class="text-gray-600">Departemen Sarana dan Prasarana
                    merupakan departemen yang membantu segala kegiatan yang dilakukan oleh departemen lain BEM IT Del. Departemen ini memiliki tanggung jawab untuk menyediakan alat dan keperluan yang mungkin dibutuhkan dalam kegiatan departemen lain.</p>
            </div>

            <div class="bg-blue-100 p-6 rounded-lg shadow-lg text-center transform transition duration-300 hover:scale-105 cursor-pointer">
                <img src="{{ asset('image/DEPOL.png') }}" alt="Departemen 2" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Departemen Olahraga</h3>
                <p class="text-gray-600">Departemen Olahraga IT Del berdedikasi untuk membina dan mengembangkan minat serta bakat olahraga mahasiswa, serta meningkatkan kualitas olahraga di lingkungan kampus.</p>
            </div>

            <div class="bg-blue-100 p-6 rounded-lg shadow-lg text-center transform transition duration-300 hover:scale-105 cursor-pointer">
                <img src="{{ asset('image/DHPM.png') }}" alt="Departemen 2" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Departemen Hubungan dan Pengabdian Masyarakat</h3>
                <p class="text-gray-600">Departemen Hubungan dan Pengabdian Masyarakat (DHPM) bertanggung jawab atas kegiatan kemahasiswaan, pengabdian masyarakat, hubungan eksternal, dan reputasi BEM IT Del.</p>
            </div>

            <div class="bg-blue-100 p-6 rounded-lg shadow-lg text-center transform transition duration-300 hover:scale-105 cursor-pointer"">
                <img src="{{ asset('image/Sarpras.png') }}" alt="Departemen 2" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Departemen Sarana dan Prasarana</h3>
                <p class="text-gray-600">Berperan dalam kegiatan keagamaan dan sosial, berkolaborasi dalam keanekaragaman di kampus.</p>
            </div>
        </div>
    </section>

    
@endsection
