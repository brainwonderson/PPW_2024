<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    if(Auth::id())
    {
        $usertype = Auth()->user()->usertype;
    }

}
