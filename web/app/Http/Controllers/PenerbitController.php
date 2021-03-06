<?php

namespace App\Http\Controllers;

use App\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Penerbit::paginate(10);
            return view("pages.penerbit.list",compact("data"));
            }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.penerbit.form");
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
            "penerbit" => "required|max:100",
        ]);

        Penerbit::create($request->except("_token"));

        $request->session()->flash("info","Berhasil Tambah Penerbit");

        return redirect()->route("penerbit.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Penerbit::find($id);
<<<<<<< HEAD
        return view("pages.penerbit.form",compact("data"));
=======
        return view("pages.penerbit.list",compact("data"));
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
    public function update(Request $request, $id)
=======
    public function update(Request $request, Penerbit $penerbit)
>>>>>>> 2c7224ae436a8c1b3b5626b3c29db445290ed8ae
    {
        $request->validate([
            "penerbit" => "required|max:100"
        ]);

<<<<<<< HEAD
        Penerbit::where("id",$id)
                ->update($request->except(["_token","_method"]));
=======
        Penerbit::create($request->except("_token"));
>>>>>>> 2c7224ae436a8c1b3b5626b3c29db445290ed8ae

        $request->session()->flash("info","Berhasil Rubah Penerbit");

        return redirect()->route("penerbit.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penerbit $penerbit)
    {
        Penerbit::destroy("id",$penerbit->id);

        return redirect()->route("penerbit.index")
            ->with("info","Berhasil Hapus Data Penerbit");
    }
}
