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
        <p class="text-gray-600 max-w-3xl mx-auto">
        Departemen Hubungan dan Pengabdian Masyarakat (DHPM) berperan dalam memimpin acara yang diadakan oleh BEM IT Del, melakukan pengabdian kepada masyarakat sekitar, menangani hubungan luar kampus, serta membangun dan mempertahankan citra BEM sebagai komunitas yang baik dan bermanfaat baik secara internal maupun eksternal.
        </p>
    </div>

    <!-- Images and Description -->
    <div class="flex justify-center mb-12 space-x-4 animate_animated animatefadeInUp animate_delay-1s">
        <div class="w-1/2 p-4">
            <img src="{{ asset('image/DHPM.png') }}" alt="Department Logo" class="rounded-md mx-auto">
        </div>
        <div class="w-1/2 p-4">
            <img src="{{ asset('image/dhpm.jpg') }}" alt="Department Event" class="rounded-md mx-auto">
        </div>
    </div>

    <!-- Leaders Section -->
    <div class="text-center mb-12 animate__animated animate__fadeInUp animate__delay-2s">
        <div class="flex justify-center space-x-16">
            <div class="text-center">
                <img src="{{ asset('image/togab.png') }}" alt="Leader 1" class="h-30 w-30 rounded-full mb-4 mx-auto">
                <p class="text-lg font-bold">SITOGAB GIRSANG</p>
                <p>Kepala Divisi</p>
            </div>
            <div class="text-center">
                <img src="{{ asset('image/dhpmwakil.png') }}" alt="Leader 2" class="h-30 w-30 rounded-full mb-4 mx-auto">
                <p class="text-lg font-bold">GABRIEL SIGALINGGING</p>
                <p>Wakil Kepala Divisi</p>
            </div>
        </div>
    </div>

    <!-- Program Kerja Section -->
    <div class="text-center mb-12 animate__animated animate__fadeInUp animate__delay-3s">
        <h2 class="text-3xl font-bold mb-8">PROGRAM KERJA</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Program Card 1 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
            Mengadakan Rapat Rutin Internal Departemen HUMAS
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Program ini dilakukan secara rutin dengan jangka waktu sekali setiap bulannya.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
    
            <!-- Program Card 2 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Mengumpulkan Dana Jika Terjadi Bencana Alam di Sekitar Kampus IT Del dan Daerah Lainnya
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Program ini dilakukan untuk membantu masyarakat dalam mengatasi  bencana yang sedang dialami dan meningkatkan kepedulian kita terhadap orang sekeliling.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
    
            <!-- Program Card 3 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Mengumpulkan Barang yang Tidak Dipakai Lagi oleh Mahasiswa untuk Disumbangkan ke Panti Asuhan
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Program yang akan dilakukan HUMAS sebagai bentuk kepedulian mahasiswa IT Del terhadap kehidupan sosial di sekitar Tobasa.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>

            <!-- Program Card 4 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Membantu Mencari Sponsor dalam Kegiatan Besar yang Akan Dilakukan oleh BEM IT Del
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Mahasiswa diberikan wadah untuk menanamkan atau mengingatkan kembali megenai keberagaman budaya Indonesia terkhusus 8 etnik budaya yang ada pada Sumut dan juga menamkan kembali jiwa nasionalisme. Dilaksanakan pada GSG dan dimulai dari pukul 13.00 s/d 18.00(selesai).
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>

            <!-- Program Card 5 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Del Art Competition
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Mahasiswa diberi wadah untuk menyalurkan bakat dan menumbuhkan jiwa kompetisi serta meningkatkan kreativitas dan inovasi dari Mahasiswa dan merupakan salah satu acara untuk menambahkan softskill Mahasiswa yang berguna untuk menghadapi Industri 4.0, dengan mengangkat tema : Corak Nusantara. Penampilan atau karya peserta akan ditampilkan secara langsung dan akan di upload melalui akun Youtube dan Instagram DEPSENBUD.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
            
            <!-- Program Card 6 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Konser
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                Konser adalah suatu pertunjukan langsung, biasanya musik, di depan penonton. Musik dapat dimainkan oleh musikus tunggal, kadang disebut resital, atau suatu ensembel musik, seperti orkestra, paduan suara, atau grup musik. Di manapun dilangsungkan, musisi biasanya tampil di atas suatu panggung.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>

            <!-- Program Card 7 -->
            <div class="relative bg-gray-200 p-6 rounded-lg text-center transform transition duration-300 hover:bg-gray-300 hover:scale-105 program-card cursor-pointer">
                Makrab
                <div class="tooltip absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-64 bg-teal-500 text-white text-sm p-3 rounded-lg shadow-lg">
                    Makrab merupakan program kerja internal dari Depsenbud yang bertujuan untuk mengakrabkan dan lebih mengenal antar anggota dalam Depsenbud. Kegiatan ini diisi dengan kegiatan-kegiatan yang mendukung bagaimana caranya agar anggota-anggota bisa lebih dekat dan lebih akrab khususnya anggota baru. Kegiatan yang dilakukan yakni permainan berkelompok, sharing pendapat, makan bersama sampai camping bersama sama dalam satu tempat. Dimana kegiatan ini akan dilakukan di luar lingkungan kampus dan dilaksanakan ketika weekend atau libur kuliah.
                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-8 border-l-transparent border-r-8 border-r-transparent border-t-8 border-t-teal-500"></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
