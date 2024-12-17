<?php

namespace App\Http\Controllers\Api;
use App\Models\departemen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class DepartemenController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all posts
        $posts = departemen::latest()->paginate(5);

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
            'deskripsi'   => 'required',
            'ketua'  => 'required',
            'wakilketua'     => 'required',
            'logo'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        $image = $request->file('logo');
        $image->storeAs('public/posts/Departemen', $image->hashName());

        //create post
        $post = departemen::create([
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'ketua'   => $request->ketua,
            'wakilketua'     => $request->wakilketua,
            'logo'     => $image->hashName(),
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
        $post = departemen::find($id);

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
            'ketua'  => 'required',
            'wakilketua'     => 'required',
            'logo'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find post by ID
        $post = departemen::find($id);

        //check if image is not empty
        if ($request->hasFile('foto')) {

            //upload image
            $image = $request->file('foto');
            $image->storeAs('public/posts/Departemen', $image->hashName());

            //delete old image
            Storage::delete('public/posts/Departemen/' . basename($post->image));

            //update post with new image
            $post->update([
                'nama'     => $request->nama,
                'deskripsi'   => $request->deskripsi,
                'ketua'   => $request->ketua,
                'wakilketua'     => $request->wakilketua,
                'logo'     => $image->hashName(),
            ]);
        } else {

            //update post without image
            $post->update([
                'nama'     => $request->nama,
                'deskripsi'   => $request->deskripsi,
                'ketua'   => $request->ketua,
                'wakilketua'     => $request->wakilketua,
                'logo'     => $image->hashName(),
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
        $post = departemen::find($id);

        //delete image
        Storage::delete('public/posts/Departemen'.basename($post->foto));

        //delete post
        $post->delete();

        //return response
        return new PostResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}