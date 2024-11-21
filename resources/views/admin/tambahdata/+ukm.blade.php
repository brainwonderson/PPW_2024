@extends('admin.sidebar.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update UKM</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto p-6">

        <div class="max-w-md mx-auto bg-white p-6 shadow-md rounded-lg">

            <form action="/insertukm" method="POST" enctype="multipart/form-data"  class="space-y-4">
                @csrf
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="nama">
                        Nama Lengkap
                    </label>
                    <input class="shadow appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" name="nama" id="nama" type="text" placeholder="Masukkan Nama UKM">
                </div>
                
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="deskripsi">
                        Deskripsi
                    </label>
                    <input class="shadow appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" name="deskripsi" id="deskripsi" type="text" placeholder="Masukkan Deskripsi UKM">
                </div>
                
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="programkerja">
                        Program Kerja
                    </label>
                    <input class="shadow appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" name="programkerja" id="programkerja" type="text" placeholder="Masukkan Program Kerja UKM">
                </div>
                
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="ketua">
                        Ketua
                    </label>
                    <input class="shadow appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" name="ketua" id="ketua" type="text" placeholder="Masukkan Nama Ketua UKM">
                </div>

                <!-- component -->
                <div class="flex items-center justify-center p-12">
                <div class="mx-auto w-full max-w-[550px] bg-white">
            
                    <div class="flex items-center justify-between">
                    
                    </div>
                    <div>
                        <form
                        class="py-6 px-9"
                        action="https://formbold.com/s/FORM_ID"
                        method="POST"
                        >
                        <button
                        class="bg-green-500 hover:bg-green-700 hover:shadow-form w-full rounded-md py-3 px-8 text-center text-base font-semibold text-white outline-none"
                        >
                        Tambahkan Data
                        </button>
                    </div>
                    </form>
                </div>
                </div>

            </form>
        </div>
    </div>

</body>
</html>

@endsection