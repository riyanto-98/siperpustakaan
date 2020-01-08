<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Member::paginate(10);
        return view("pages.member.list",compact("data"));
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.member.form");
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
            "nama"   => "required|max:100",
            "nim"    => "required|max:100",
            "alamat" => "required|max:100",
            "no"     => "required|max:100",
            "email" => "required|max:100",
        ]);

        Member::create($request->except("_token"));

        $request->session()->flash("info","Berhasil Tambah Member");

        return redirect()->route("member.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Member::find($id);
<<<<<<< HEAD
        return view("pages.member.form",compact("data"));
=======
        return view("pages.member.list",compact("data"));
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
    public function update(Request $request, Member $member)
>>>>>>> 2c7224ae436a8c1b3b5626b3c29db445290ed8ae
    {
        $request->validate([
            "nama"   => "required|max:100",
            "nim"    => "required|max:100",
            "alamat" => "required|max:100",
            "no"     => "required|max:100",
<<<<<<< HEAD
            "email" => "required|max:100"
        ]);

        Member::where("id",$id)
        ->update($request->except(["_token","_method"]));
=======
            "email" => "required|max:100",
        ]);

        Member::create($request->except("_token"));
>>>>>>> 2c7224ae436a8c1b3b5626b3c29db445290ed8ae

        $request->session()->flash("info","Berhasil Rubah Member");

        return redirect()->route("member.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        Member::destroy("id",$member->id);

        return redirect()->route("member.index")
            ->with("info","Berhasil Hapus Data Member");
    }
}
