<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            $data = Buku::paginate(10);
            return view("pages.buku.list",compact("data"));
            }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("pages.buku.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "namabuku" => "required|max:100",
            "namapengarang" => "required|max:100",
            "penerbit" => "required|max:100",
            "genre" => "required|max:100",
            "jumlah" => "required|max:100",


        ]);

        Buku::create($request->except("_token"));

        $request->session()->flash("info","Berhasil Tambah Buku");

        return redirect()->route("buku.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Buku::paginate(10);
        return view("pages.buku.list",compact("data"));
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
    public function update(Request $request, $id)
    {
        $request->validate([
            "namabuku" => "required|max:100",
            "namapengarang" => "required|max:100",
            "penerbit" => "required|max:100",
            "genre" => "required|max:100",
            "jumlah" => "required|max:100",


        ]);

        Buku::where("id",$buku->id)
                ->update($request->except(["_token","_method"]));

        $request->session()->flash("info","Berhasil Rubah Data Buku");

        return redirect()->route("buku.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buku::destroy("id",$buku->id);

        return redirect()->route("buku.index")
            ->with("info","Berhasil Hapus Data Buku");
    }
}
