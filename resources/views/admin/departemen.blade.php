@extends('admin.sidebar.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keanggotaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">


    <div class="container mx-auto p-4">
        <!-- <h1 class="text-2xl font-bold mb-4 ml-20">Struktur Bem Table </h1> -->

        <!-- Button Tambah Data dan Tabel dalam satu kontainer -->
        <div class="max-w-4xl mx-auto ml-50">

            <!-- Flex untuk button dan tabel -->
            <div class="flex justify-between items-center mb-4">
                <!-- Button Tambah Data berada di atas ujung kiri tabel -->
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 border border-green-700 rounded">
                    <a href="/tambahdata-departemen" > Tambah Data </a>
                </button>
            </div>

            <!-- Tabel -->
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 border-b text-left w-12">#</th>
                        <th class="py-2 px-4 border-b text-left w-32">Nama</th>
                        <th class="py-2 px-4 border-b text-left w-32">Deskripsi</th>
                        <th class="py-2 px-4 border-b text-left w-64">Logo</th>
                        <th class="py-2 px-4 border-b text-left w-35">Ketua</th>
                        <th class="py-2 px-4 border-b text-left w-35">Wakil Ketua</th>
                        <th class="py-2 px-4 border-b text-center w-36">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $no = 1;
                    @endphp
                    @foreach ($data as $row)
                    <tr>
                        <td class="py-2 px-4 border-b">{{$no++}}</td>
                        <td class="py-2 px-4 border-b">{{$row->nama}}</td>
                        <td class="py-2 px-4 border-b">{{$row->deskripsi}}</td>
                        <td class="py-2 px-4 border-b">{{$row->logo}}</td>
                        <td class="py-2 px-4 border-b">{{$row->ketua}} </td>
                        <td class="py-2 px-4 border-b">{{$row->wakilketua}} </td>
                        <td class="py-2 px-4 border-b text-center">
                            <div class="inline-flex space-x-2">
                                <a href="/tampilkandata/{{$row->id}}" type=button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded-full">Edit</a>
                                <a href="/delete/{{$row->id}}" type=button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded-full">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>
@endsection