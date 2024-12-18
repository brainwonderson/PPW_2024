@extends('admin.sidebar.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Keanggotaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6 text-center">Simple Table Example</h1>

        <div class="max-w-md mx-auto bg-white p-6 shadow-md rounded-lg">

            <form action="/updatedata/{{$data->id}}" method="POST" enctype="multipart/form-data"  class="space-y-4">
                @csrf
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="nama">
                        Nama Lengkap
                    </label>
                    <input value="{{$data->nama}}" class="shadow appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" name="nama" id="nama" type="text" placeholder="Masukkan Nama Lengkap">
                </div>

                <div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                    <select name="departemen" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>{{$data->departemen}}</option>
                        <option >BPH INTI</option>
                        <option >DIPTEK</option>
                        <option >DEPOL</option>
                        <option >DEPAGSOS</option>
                        <option >DEPSENBUD</option>
                        <option >DHPM</option>
                        <option >DPDK</option>
                        <option >DEPKEBDIS</option>
                        <option >SARPRAS</option>
                    </select>
                </div>

                <div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                    <select name="jabatan" id="jabatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>{{$data->jabatan}}</option>
                        <option >Ketua</option>
                        <option >Wakil Ketua</option>
                        <option >Sekretaris</option>
                        <option >Bendahara</option>
                        <option >Anggota</option>
                    </select>
                </div>
                
                <!-- component -->
                <div class="flex items-center justify-center p-12">
                
                </div>

            </form>
        </div>
    </div>

</body>
</html>

@endsection