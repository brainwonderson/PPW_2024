@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10">
        <h1 class="text-4xl font-bold text-center mb-8">Vote for Your Favorite Candidate</h1>

        <!-- Candidates List -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Candidate Card 1 -->
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <img src="{{ asset('image/candidate1.jpg') }}" alt="Candidate 1" class="w-32 h-32 rounded-full mx-auto mb-4">
                <h2 class="text-xl font-semibold">Candidate 1</h2>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mt-4 vote-button" data-candidate-id="1">
                    Vote
                </button>
                <p class="mt-2 text-gray-600">Votes: 10</p>
            </div>

            <!-- Candidate Card 2 -->
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <img src="{{ asset('image/candidate2.jpg') }}" alt="Candidate 2" class="w-32 h-32 rounded-full mx-auto mb-4">
                <h2 class="text-xl font-semibold">Candidate 2</h2>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mt-4 vote-button" data-candidate-id="1">
                    Vote
                </button>
                <p class="mt-2 text-gray-600">Votes: 20</p>
            </div>

            <!-- Candidate Card 3 -->
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <img src="{{ asset('image/candidate3.jpg') }}" alt="Candidate 3" class="w-32 h-32 rounded-full mx-auto mb-4">
                <h2 class="text-xl font-semibold">Candidate 3</h2>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mt-4 vote-button" data-candidate-id="1">
                    Vote
                </button>
                <p class="mt-2 text-gray-600">Votes: 30</p>
            </div>
        </div>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- AJAX Script -->
    <script>
        $(document).ready(function() {
            $('.vote-button').click(function() {
                var candidateId = $(this).data('candidate-id');

                $.ajax({
                    url: '/vote', // Your endpoint to handle voting
                    method: 'POST',
                    data: {
                        candidate_id: candidateId,
                        _token: '{{ csrf_token() }}' // Include CSRF token for security
                    },
                    success: function(response) {
                        // Update the vote count on the page
                        var currentVotes = parseInt($(this).siblings('p').text().split(': ')[1]);
                        $(this).siblings('p').text('Votes: ' + (currentVotes + 1));
                    }.bind(this),
                    error: function(xhr) {
                        alert('An error occurred while voting. Please try again.');
                    }
                });
            });
        });
    </script>
@endsection