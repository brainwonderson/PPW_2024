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

            <form action="/insertvote" method="POST" enctype="multipart/form-data"  class="space-y-4">
                @csrf
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="nomor_kandidat">
                        Nomor Kandidat
                    </label>
                    <input class="shadow appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" name="nomor_kandidat" id="nomor_kandidat" type="text" placeholder="masukkan nomor kandidat">
                </div>
                
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="nama_kandidat">
                        Nama Kandidat
                    </label>
                    <input class="shadow appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" name="nama_kandidat" id="nama_kandidat" type="text" placeholder="masukkan nama kandidat">
                </div>

                <!-- component -->
                <div class="flex items-center justify-center p-12">
                <div class="mx-auto w-full max-w-[550px] bg-white">
                    <form
                    class="py-6 px-9"
                    action="https://formbold.com/s/FORM_ID"
                    method="POST"
                    >

                    <div class="mb-6 pt-4">
                        <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                        Upload Foto
                        </label>

                        <div class="mb-8">
                        <input type="file" name="foto_kandidat" id="file" class="sr-only" />
                        <label
                            for="file"
                            class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center"
                        >
                            <div>
                            <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                Drop files here
                            </span>
                            <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                Or
                            </span>
                            <span
                                class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]"
                            >
                                Browse
                            </span>
                            </div>
                        </label>
                        </div>

                        <div class="flex items-center justify-between">
                        
                        </div>
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