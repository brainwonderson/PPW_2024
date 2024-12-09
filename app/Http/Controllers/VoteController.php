<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{

    public function vote()
    {
        $candidates = Candidate::all(); // Or however you retrieve your candidates
        return view('menu/vote', compact('candidates'));
    }


    public function castVote(Request $request)
{
    $request->validate([
        'candidate_id' => 'required|exists:candidates,id',
    ]);

    $candidate = Candidate::find($request->candidate_id);
    $candidate->votes += 1; // Increment the vote count
    $candidate->save(); // Save the changes

    return response()->json(['success' => true, 'votes' => $candidate->votes]);
}

}