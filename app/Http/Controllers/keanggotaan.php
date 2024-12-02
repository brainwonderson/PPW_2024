<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\BPH;
use App\Models\Jabatan;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;


class keanggotaan extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index(){
        $posts = Post::all();
        return view('public.blog.blog', compact('posts'));
    }

}
