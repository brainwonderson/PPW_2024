@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10 justify-center">
        <h1 class="text-4xl font-bold text-center mb-8">Pilih Kandidat Favorit Anda</h1>
        <!-- Candidates List -->
            @csrf
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
                    <div class="bg-white shadow-md rounded-lg p-6 text-center">
                        <h2 class="text-xl font-semibold">{{ $row->nomor_kandidat }}</h2>
                        <img src="{{ asset('bem/' . $row->foto_kandidat) }}" alt="Candidate" class="w-32 h-32 rounded-full mx-auto mb-4">
                        <h2 class="text-xl font-semibold">{{ $row->nama_kandidat }}</h2>
                        @auth
                            @if (auth()->user()->vote_to)
                                <!-- Jika user sudah voting -->
                                <button class="bg-gray-400 text-white font-bold py-2 px-4 rounded-full mt-4" disabled>
                                    Already Voted
                                </button>
                            @else
                                <!-- Jika user belum voting -->
                                <button 
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mt-4 vote-button" 
                                    data-candidate-id="{{ $row->id }}" 
                                    data-candidate-name="{{ $row->nama_kandidat }}">
                                    Vote
                                </button>
                            @endif
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

    <!-- Modal -->
    <div id="voteModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-75 flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg p-6 w-96">
            <h2 class="text-xl font-semibold mb-4">Confirm Your Vote</h2>
            <p>Are you sure you want to vote for <span id="candidateName" class="font-bold"></span>?</p>
            <div class="mt-6 flex justify-end">
                <button id="cancelButton" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-4">
                    Cancel
                </button>
                <form id="confirmVoteForm" action="" method="POST">
                    @csrf
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Confirm
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const voteButtons = document.querySelectorAll('.vote-button');
            const modal = document.getElementById('voteModal');
            const candidateName = document.getElementById('candidateName');
            const confirmVoteForm = document.getElementById('confirmVoteForm');
            const cancelButton = document.getElementById('cancelButton');

            voteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const candidateId = this.dataset.candidateId;
                    const candidateNameText = this.dataset.candidateName;

                    // Set candidate name and form action
                    candidateName.textContent = candidateNameText;
                    confirmVoteForm.action = `/updatevote/${candidateId}`;

                    // Show modal
                    modal.classList.remove('hidden');
                });
            });

            cancelButton.addEventListener('click', function () {
                modal.classList.add('hidden');
            });
        });
    </script>
@endsection