<?php

namespace App\Http\Controllers\Api;

use App\Models\ukm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Validator;

class UKMController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all posts
        $posts = ukm::latest()->paginate(5);

        
        //return collection of posts as a resource
        return view('/ukm/basket', compact('posts'));

    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'nama'     => 'required',
            'deskripsi'   => 'required',
            'programkerja'  => 'required',
            'ketua'     => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $post = ukm::create([
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'programkerja'   => $request->programkerja,
            'ketua'     => $request->ketua,
        ]);

        //return response
        return new PostResource(true, 'Data Post Berhasil Ditambahkan!', $post);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return void
     */
    public function show($id)
    {
        //find post by ID
        $post = ukm::find($id);

        if (!$post) {
            return response()->json([
                'success' => false,
                'message' => 'Data ukm tidak ditemukan!',
            ], 404);
        }

        //return single post as a resource
        return new PostResource(true, 'Detail Data Post!', $post);
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'nama'     => 'required',
            'deskripsi'   => 'required',
            'programkerja'  => 'required',
            'ketua'     => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find post by ID
        $post = ukm::find($id);

        if (!$post) {
            return response()->json([
                'success' => false,
                'message' => 'Data ukm tidak ditemukan!',
            ], 404);
        }

        //update post without image
        $post->update([
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'programkerja'   => $request->programkerja,
            'ketua'     => $request->ketua,
        ]);

        //return response
        return new PostResource(true, 'Data Post Berhasil Diubah!', $post);
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {

        //find post by ID
        $post = ukm::find($id);

        if (!$post) {
            return response()->json([
                'success' => false,
                'message' => 'Data ukm tidak ditemukan!',
            ], 404);
        }

        //delete post
        $post->delete();

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Post Berhasil Dihapus!',
        ], 200);
    }
}
