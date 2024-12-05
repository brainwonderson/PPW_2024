<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM Institut Teknologi Del</title>
    @vite('resources/css/app.css')

    <style>
      /* Custom CSS for hamburger icon */
      .hamburger {
          display: none;
          flex-direction: column;
          cursor: pointer;
      }
      .hamburger span {
          height: 3px;
          width: 25px;
          background: #fff;
          margin-bottom: 5px;
          border-radius: 5px;
          transition: transform 0.3s ease-in-out;
      }
      .cross {
          display: none;
          font-size: 24px;
          color: #fff;
          cursor: pointer;
      }
      @media (max-width: 1024px) {
          .hamburger {
              display: flex;
          }
          .cross {
              display: block;
          }
      }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Header for Mobile View -->
    <header class="lg:hidden flex items-center justify-between bg-gray-900 text-white p-4">
        <div class="hamburger" onclick="toggleSidebar()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        {{-- <h1 class="text-xl font-bold">Admin BEM</h1> --}}
    </header>

    <!-- Sidebar -->
    <div id="sidebar" class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[200px] overflow-y-auto text-center bg-gray-900 lg:translate-x-0 -translate-x-full transition-transform duration-300 ease-in-out">
        <div class="text-gray-100 text-xl">
            <div class="p-2.5 mt-1 flex items-center justify-between gap-1">
                <img src="{{ asset('image/bem.png') }}" alt="bem" class="w-12 h-12 cursor-pointer">
                <h1 class="font-bold text-gray-200 text-[15px]">Admin BEM</h1>
                <div class="cross lg:hidden" onclick="toggleSidebar()">&#10005;</div>
            </div>
            <div class="my-2 bg-gray-600 h-[1px]"></div>
        </div>
        <div class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white">
            <i class="bi bi-search text-sm"></i>
            <input type="text" placeholder="Search" class="text-[15px] ml-4 w-full bg-transparent focus:outline-none" />
        </div>
        <!-- Menu Items -->
        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-house-door-fill"></i>
            <a href="/admin" class="text-[15px] ml-4 text-gray-200 font-bold">Home</a>
        </div>
        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-bookmark-fill"></i>
            <a href="/departemen" class="text-[15px] ml-4 text-gray-200 font-bold">Departemen</a>
        </div>
        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-bookmark-fill"></i>
            <a href="/ukm" class="text-[15px] ml-4 text-gray-200 font-bold">UKM</a>
        </div>
        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-chat-left-text-fill"></i>
            <a href="/keanggotaan" class="text-[15px] ml-4 text-gray-200 font-bold">Keanggotaan</a>
        </div>
        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-chat-left-text-fill"></i>
            <a href="/vote_admin" class="text-[15px] ml-4 text-gray-200 font-bold">Vote</a>
        </div>
        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-box-arrow-in-right"></i>
            <a href="/login" class="text-[15px] ml-4 text-gray-200 font-bold">Logout</a>
        </div>
    </div>

    <!-- Main Content -->
    <main class="lg:ml-[200px] p-4">
        @yield('content')
    </main>

    <!-- JavaScript for Sidebar Toggle -->
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        }
    </script>
</body>
</html>
