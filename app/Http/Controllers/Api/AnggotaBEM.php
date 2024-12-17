<?php

namespace App\Http\Controllers\Api;
use App\Models\keanggotaan;
use App\Models\PostAnggotaBEM;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class AnggotaBEM extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all posts
        $posts = keanggotaan::latest()->paginate(5);

        //return collection of posts as a resource
        return new PostResource(true, 'List Data Posts', $posts);
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
            'departemen'   => 'required',
            'jabatan'  => 'required',
            'foto'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        $image = $request->file('foto');
        $image->storeAs('public/posts/AnggotaBEM', $image->hashName());

        //create post
        $post = keanggotaan::create([
            'nama'     => $request->nama,
            'departemen'   => $request->departemen,
            'jabatan'   => $request->jabatan,
            'foto'     => $image->hashName(),
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
        $post = keanggotaan::find($id);

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
            'departemen'   => 'required',
            'jabatan'  => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find post by ID
        $post = keanggotaan::find($id);

        //check if image is not empty
        if ($request->hasFile('foto')) {

            //upload image
            $image = $request->file('foto');
            $image->storeAs('public/posts/AnggotaBEM', $image->hashName());

            //delete old image
            Storage::delete('public/posts/AnggotaBEM/' . basename($post->image));

            //update post with new image
            $post->update([
                'nama'     => $request->nama,
                'departemen'   => $request->departemen,
                'jabatan'   => $request->jabatan,
                'foto'     => $image->hashName(),
            ]);
        } else {

            //update post without image
            $post->update([
                'nama'     => $request->nama,
                'departemen'   => $request->departemen,
                'jabatan'   => $request->jabatan,
            ]);
        }

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
        $post = keanggotaan::find($id);

        //delete image
        Storage::delete('public/posts/AnggotaBEM'.basename($post->foto));

        //delete post
        $post->delete();

        //return response
        return new PostResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}