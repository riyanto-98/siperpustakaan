<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Genre::paginate(10);
        return view("pages.genre.list",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.genre.form");
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
            "genre" => "required|max:100",
        ]);

        Genre::create($request->except("_token"));

        $request->session()->flash("info","Berhasil Tambah Penerbit");

        return redirect()->route("genre.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Genre::find($id);
<<<<<<< HEAD
        return view("pages.genre.form",compact("data"));
=======
        return view("pages.genre.list",compact("data"));
>>>>>>> 2c7224ae436a8c1b3b5626b3c29db445290ed8ae
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function update(Request $request,$id)
=======
    public function update(Request $request,Genre $genre)
>>>>>>> 2c7224ae436a8c1b3b5626b3c29db445290ed8ae
    {
        $request->validate([
            "genre" => "required|max:100",
        ]);

<<<<<<< HEAD
        Genre::where("id",$id)
                ->update($request->except(["_token","_method"]));

        $request->session()->flash("info","Berhasil Rubah Genre");
=======
        Genre::create($request->except("_token"));

        $request->session()->flash("info","Berhasil Rubah Penerbit");
>>>>>>> 2c7224ae436a8c1b3b5626b3c29db445290ed8ae

        return redirect()->route("genre.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genre $genre)
    {
        Genre::destroy("id",$genre->id);

        return redirect()->route("genre.index")
            ->with("info","Berhasil Hapus Data Penerbit");
    }
}
