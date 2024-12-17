@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10 justify-center">
        <h1 class="text-4xl font-bold text-center mb-8">Vote for Your Favorite Candidate</h1>
        <!-- Candidates List -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Candidate Card 1 -->
            @if($data->isEmpty())
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <h2 class="text-xl font-semibold">Kandidat-01</h2>
                    <img src="" alt="" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h2 class="text-xl font-semibold">Kandidat1</h2>
                    <h2 class="bg-blue-700 text-white font-bold py-2 px-4 rounded-full mt-4 vote-button" data-candidate-id="2">
                        Vote Not Available Yet
                    </h2>
                </div>

                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <h2 class="text-xl font-semibold">Kandidat-02</h2>
                    <img src="" alt="" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h2 class="text-xl font-semibold">Kandidat2</h2>
                    <h2 class="bg-blue-700 text-white font-bold py-2 px-4 rounded-full mt-4 vote-button" data-candidate-id="2">
                        Vote Not Available Yet
                    </h2>
                </div>

                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <h2 class="text-xl font-semibold">Kandidat-03</h2>
                    <img src="" alt="" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h2 class="text-xl font-semibold">Kandidat3</h2>
                    <h2 class="bg-blue-700 text-white font-bold py-2 px-4 rounded-full mt-4 vote-button" data-candidate-id="2">
                        Vote Not Available Yet
                    </h2>
                </div>
            @else
                @foreach ($data as $row)
                <div class="bg-white shadow-md rounded-lg p-6 text-center justify-center">
                    <h2 class="text-xl font-semibold">{{$row->nomor_kandidat}}</h2>
                    <img src="{{ asset('bem/' . $row->foto_kandidat) }} " alt="Candidate" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h2 class="text-xl font-semibold">{{$row->nama_kandidat}}</h2>
                    @auth
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mt-4 vote-button" data-candidate-id="{{ $row->id }}">
                            Vote
                        </button>
                    @else
                        <div class="bg-gray-400 text-white font-bold py-2 px-4 rounded-full mt-4">
                            Please login to vote
                        </div>
                    @endauth
                </div>
                @endforeach
            @endif

        </div>
    </div>
@endsection
