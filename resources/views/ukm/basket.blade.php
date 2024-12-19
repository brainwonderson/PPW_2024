@extends('layouts.app')

@section('content')
<head>
    <title>Basket</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Content Section -->

    <div class="container mx-auto px-6 py-12">
        <!-- About Section -->
        <div class="bg-yellow-100 p-10 rounded-lg shadow-lg text-center">
            <div class="flex flex-col items-center">
                <!-- Logo/Avatar -->
                <img src="{{ asset('image/basket.png') }}" alt="BASKET Logo" class="w-20 h-20 rounded-full mb-4">

                @if(isset($posts) && $posts->count())
                    <ul>
                        @foreach($posts as $post)
                            <h1 class="text-3xl font-bold mb-6">{{ $post->nama }}</h1>
                            <p class="text-gray-600">{{ Str::limit($post->deskripsi, 150) }}</p>

                            <div class="program-kerja text-center mt-12 animate_animated animatefadeInUp animate_delay-1s">
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                                    <p class="program-item bg-white p-3 rounded-md shadow-md">{{ $post->programkerja }}</p> <!-- Menambahkan Program Kerja -->
                                </div>
                            </div>

                            <!-- Struktur Keanggotaan Section -->
                            <div class="struktur-keanggotaan text-center mt-12 animate_animated animatefadeInUp animate_delay-2s">
                                <h2 class="text-2xl font-semibold mt-20">Struktur Keanggotaan 2023/2024</h2>
                                <div class="flex justify-center space-x-12">
                                    <div class="leader-item text-center">
                                        <span>{{ $post->ketua }}</span>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </ul>
                    <div class="mt-6">
                        {{ $posts->links() }}
                    </div>
                @else
                    <p class="text-gray-600">Data UKM tidak tersedia.</p>
                @endif
            </div>
        </div>
    </div>

    <script>
        // Toggle Mobile Menu
        document.getElementById('menu-toggle').addEventListener('click', function () {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>

</body>
@endsection
