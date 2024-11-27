<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function vote(Request $request, $candidateId)
    {
        // Pastikan user telah login
        if (!Auth::check()) {
            return response()->json(['message' => 'User  must be logged in to vote.'], 403);
        }

        // Cek apakah user sudah pernah memberikan suara
        if (Vote::where('user_id', Auth::id())->exists()) {
            return response()->json(['message' => 'You have already voted.'], 403);
        }

        // Temukan kandidat
        $candidate = Candidate::findOrFail($candidateId);

        // Tambah jumlah suara untuk kandidat
        $candidate->increment('vote_count');

        // Simpan data voting
        Vote::create([
            'user_id' => Auth::id(),
            'candidate_id' => $candidate->id,
        ]);

        return response()->json(['message' => 'Vote successfully submitted.']);
    }
}