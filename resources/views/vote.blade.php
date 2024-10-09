@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10">
        <h1 class="text-4xl font-bold text-center mb-8">Vote for Your Favorite Candidate</h1>

        <!-- Candidates List -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Candidate Card 1 -->
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <!-- Candidate Photo -->
                <img src="{{ asset('image/candidate1.jpg') }}" alt="Candidate 1" class="w-32 h-32 rounded-full mx-auto mb-4">
                
                <!-- Candidate Name -->
                <h2 class="text-xl font-semibold">Candidate 1</h2>
                
                <!-- Vote Button -->
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mt-4">
                    Vote
                </button>

                <!-- Total Votes -->
                <p class="mt-2 text-gray-600">Votes: 10</p>
            </div>

            <!-- Candidate Card 2 -->
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <img src="{{ asset('image/candidate2.jpg') }}" alt="Candidate 2" class="w-32 h-32 rounded-full mx-auto mb-4">
                <h2 class="text-xl font-semibold">Candidate 2</h2>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mt-4">
                    Vote
                </button>
                <p class="mt-2 text-gray-600">Votes: 20</p>
            </div>

            <!-- Candidate Card 3 -->
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <img src="{{ asset('image/candidate3.jpg') }}" alt="Candidate 3" class="w-32 h-32 rounded-full mx-auto mb-4">
                <h2 class="text-xl font-semibold">Candidate 3</h2>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mt-4">
                    Vote
                </button>
                <p class="mt-2 text-gray-600">Votes: 30</p>
            </div>
        </div>
    </div>
@endsection