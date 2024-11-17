<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/try.css') }}">
    <title>BEM Institut Teknologi Del</title>
    @vite('resources/css/app.css')
    <style>
        /* Custom CSS for hamburger and blur effect */
        .blur-effect {
            filter: blur(100px);
            pointer-events: none;
            position: absolute;
            width: 300px;
            height: 300px;
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            z-index: 10;
        }
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }
        .hamburger span {
            height: 3px;
            width: 25px;
            background: #333;
            margin-bottom: 5px;
            border-radius: 5px;
        }
        @media (max-width: 768px) {
            .hamburger {
                display: flex;
            }
            .nav-links {
                display: none;
                flex-direction: column;
                width: 100%;
                background: white;
                position: absolute;
                top: 100%;
                left: 0;
                z-index: 50;
            }
            .nav-links.show {
                display: flex;
            }
        }
    </style>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow p-4 sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <img src="{{ asset('image/bem.png') }}" alt="bem" class="w-12 h-12 cursor-pointer">
                <div class="flex flex-col text-center md:text-left">
                    <span class="text-2xl font-bold text-gray-800">BEM IT Del</span>
                    <span class="text-sm font-bold text-gray-800">Kabinet Sahala Saunduran</span>
                </div>
            </div>
            
            <!-- Hamburger Menu -->
            <div class="hamburger" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <!-- Navbar Links -->
            <ul class="nav-links flex md:flex-row space-y-3 md:space-y-0 md:space-x-6">
                <li><a href="/" class="text-gray-700 hover:text-blue-500">Home</a></li>
                <li><a href="/about" class="text-gray-700 hover:text-blue-500">About us</a></li>
                
                <!-- Dropdown Menu -->
                <li class="relative group">
                    <button class="text-gray-700 hover:text-blue-500 flex items-center" onclick="toggleDropdown(event)">
                        Department
                        <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="dropdownMenu" class="hidden z-50 absolute bg-white shadow-lg rounded mt-2">
                        <a href="/diptek" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">DIPTEK</a>
                        <a href="/depagsos" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">DEPAGSOS</a>
                        <a href="/dpdk" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">DPDK</a>
                        <a href="/dhpm" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">DHPM</a>
                        <a href="/depkominfo" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">DEPKOMINFO</a>
                        <a href="/sarpras" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">SARPRAS</a>
                        <a href="/depol" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">DEPOL</a>
                        <a href="/depkebdis" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">DEPKEBDIS</a>
                        <a href="/depsenbud" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">DEPSENBUD</a>
                    </div>
                </li>
                <li><a href="/vote" class="text-gray-700 hover:text-blue-500">Voting</a></li>
            </ul>
            <div>
                <a href="{{ url('/login') }}" class="bg-blue-900 text-white px-4 py-2 rounded-md">Login</a>
            </div>
        </div>
    </nav>
    <div id="blur" class="blur-effect"></div>
    <main>
        @yield('content')
    </main>
    <script>
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('show');
        }
        function toggleDropdown(event) {
            const dropdown = document.getElementById('dropdownMenu');
            dropdown.classList.toggle('hidden');
            event.stopPropagation();
        }
        document.addEventListener('click', () => {
            document.getElementById('dropdownMenu').classList.add('hidden');
        });
    </script>
</body>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-6 mt-10">
    <div class="container mx-auto text-center md:text-left md:flex justify-between items-center">
        <div class="flex items-center mb-4 md:mb-0">
            <img src="{{ asset('image/logodel.png') }}" alt="Logo IT Del" class="w-20 h-20 mx-4">
            <div class="ml-2">
                <h3 class="text-lg font-bold">Kontak Kami</h3>
                <p>Institut Teknologi Del</p>
                <p>Jl. Sisingamangaraja, Sitoluama, Laguboti, Toba, Sumatera Utara, Indonesia</p>
                <p>Kode Pos: 22381</p>
                <p>+62 632 331234</p>
                <p>info@del.ac.id</p>
            </div>
        </div>
        <div class="flex space-x-4 justify-center md:justify-start mx-4">
            <!-- Email Icon -->
            <a href="mailto:hims@del.ac.id" target="_blank" class="text-white hover:text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 12.713L.015 6V20h23.97V6L12 12.713z" />
                    <path d="M12 11.287L.015 4.573h23.97L12 11.287z" />
                </svg>
            </a>
            <!-- Instagram Icon -->
            <a href="https://www.instagram.com/bem.itdel/" target="_blank" class="text-white hover:text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.17.057 1.98.24 2.43.402.53.182.91.398 1.311.799.402.401.618.782.799 1.311.162.45.345 1.26.402 2.43.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.057 1.17-.24 1.98-.402 2.43-.182.53-.398.91-.799 1.311-.401.402-.782.618-1.311.799-.45.162-1.26.345-2.43.402-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.17-.057-1.98-.24-2.43-.402-.53-.182-.91-.398-1.311-.799-.402-.401-.618-.782-.799-1.311-.162-.45-.345-1.26-.402-2.43-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.057-1.17.24-1.98.402-2.43.182-.53.398-.91.799-1.311.401-.402.782-.618 1.311-.799.45-.162 1.26-.345 2.43-.402 1.266-.058 1.646-.07 4.85-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-1.275.058-2.145.256-2.907.548a5.92 5.92 0 0 0-2.162 1.462 5.92 5.92 0 0 0-1.462 2.162c-.292.762-.49 1.632-.548 2.907-.058 1.28-.072 1.688-.072 4.947s.014 3.667.072 4.947c.058 1.275.256 2.145.548 2.907a5.92 5.92 0 0 0 1.462 2.162 5.92 5.92 0 0 0 2.162 1.462c.762.292 1.632.49 2.907.548 1.28.058 1.688.072 4.947.072s3.667-.014 4.947-.072c1.275-.058 2.145-.256 2.907-.548a5.92 5.92 0 0 0 2.162-1.462 5.92 5.92 0 0 0 1.462-2.162c.292-.762.49-1.632.548-2.907.058-1.28.072-1.688.072-4.947s-.014-3.667-.072-4.947c-.058-1.275-.256-2.145-.548-2.907a5.92 5.92 0 0 0-1.462-2.162 5.92 5.92 0 0 0-2.162-1.462c-.762-.292-1.632-.49-2.907-.548-1.28-.058-1.688-.072-4.947-.072zM12 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 10.162a3.999 3.999 0 1 1 0-7.998 3.999 3.999 0 0 1 0 7.998zm6.406-11.845a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0z"/>
                </svg>
            </a>
            <!-- YouTube Icon -->
            <a href="https://www.youtube.com/@bemitdel" target="_blank" class="text-white hover:text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19.615 3.184c1.202.176 2.168 1.142 2.344 2.344.338 2.297.338 7.092.338 7.092s0 4.795-.338 7.092c-.176 1.202-1.142 2.168-2.344 2.344-2.297.338-7.092.338-7.092.338s-4.795 0-7.092-.338c-1.202-.176-2.168-1.142-2.344-2.344C2.176 17.415 2.176 12.62 2.176 12.62s0-4.795.338-7.092c.176-1.202 1.142-2.168 2.344-2.344C7.155 2.846 12 2.846 12 2.846s4.795 0 7.092.338c1.202.176 2.168 1.142 2.344 2.344zM9.746 15.465l5.51-3.465-5.51-3.465v6.93z"/>
                </svg>
            </a>
        </div>
    </div>
</footer>
</html>
