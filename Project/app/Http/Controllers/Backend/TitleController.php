<?php

namespace App\Http\Controllers\Backend;

use App\Post;
use App\Title;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = Title::orderBy('id')->paginate(5);

        return view('backend.title.index',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = null;
        return view('backend.title.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'cover' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'sinopsis' => 'required',
            'pengarang' => 'required',
        ]);

        // $path = $request->file('image')->store('public/images');
        //mengambil data file yang diupload
        $file           = $request->file('cover');
        //mengambil nama file
        $nama_file      = $file->getClientOriginalName();

        //memindahkan file ke folder tujuan
        $file->move('images',$file->getClientOriginalName());

        $post = new Title;

        $post->name = $request->judul;
        $post->sinopsis = $request->sinopsis;
        $post->cover = $nama_file;
        $post->creator_id = $request->pengarang;


        $post->save();


        return redirect()->route('title.index')
                        ->with('success','Title has been created successfully.');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\post  $post
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Post $post)
    // {
    //     return view('posts.show',compact('post'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Title $title)
    {
        return view('backend.title.edit',compact('title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'sinopsis' => 'required',
            'pengarang' => 'required',
        ]);

        $post = Title::find($id);
        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $file           = $request->file('image');
            $nama_file      = $file->getClientOriginalName();
            $file->move('images',$file->getClientOriginalName());
            $post->cover = $nama_file;
        }

        $post->name = $request->judul;
        $post->sinopsis = $request->sinopsis;
        $post->creator_id = $request->pengarang;
        $post->save();

        return redirect()->route('title.index')
                        ->with('success','Post updated successfully');
    }
    public function destroy(Title $title)
    {
        $title->delete();

        return redirect()->route('title.index')
                        ->with('success','Post has been deleted successfully');
    }
}
