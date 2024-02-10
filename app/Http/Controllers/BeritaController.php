<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Berita::orderBy("created_at","desc")->paginate(5);
        return view("admin.home.berita.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Berita::orderBy("created_at","desc")->paginate(5);
        return view("admin.home.berita.create", compact("data"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi form
        $this->validate($request, [
            "image"     => "required|image|mimes:jpeg,jpg,png,gif,svg|max:2048",
            "title"     => "required|min:5",
            "info"      => "required|min:10",
            "content"   => "required|min:15",
        ]);

        //upload image
        $image = $request->file("image");
        $image->storeAs('public/berita/', $image->hashName());

        //create berita
        Berita::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'info'      => $request->info,
            'content'   => $request->content,
        ]);

        return redirect()->route('berita.index')->with('success','Data Berhasil Di simpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

