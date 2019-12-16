<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kamar;

class kamarcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kamar::paginate(10);

        return view("pages.listkamar.list",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.daftar.form");
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
            "idkamar" => "required|max:10",
            "jenis" => "required|max:20",
            "fasilitas1" => "nullable|max:20",
            "fasilitas2" => "nullable|max:20",
            "fasilitas3" => "nullable|max:20",
            "fasilitas4" => "nullable|max:20",
            "fasilitas5" => "nullable|max:20",
            "fasilitas6" => "nullable|max:20",
            "fasilitas7" => "nullable|max:20",
            "fasilitas8" => "nullable|max:20",
            "fasilitas9" => "nullable|max:20",
            "fasilitas10" => "nullable|max:20",
            "harga" => "required|max:10"
        ]);

        kamar::create($request->except("_token"));

        $request->session()->flash("info","Berhasil Tambah kamar");

        return redirect()->route("kamar.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
        $kamar = kamar::all();
        return view("pages.daftar.form",compact("data"));
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
            "idkamar" => "nullable|max:10",
            "jenis" => "nullable|max:20",
            "fasilitas1" => "nullable|max:20",
            "fasilitas2" => "nullable|max:20",
            "fasilitas3" => "nullable|max:20",
            "fasilitas4" => "nullable|max:20",
            "fasilitas5" => "nullable|max:20",
            "fasilitas6" => "nullable|max:20",
            "fasilitas7" => "nullable|max:20",
            "fasilitas8" => "nullable|max:20",
            "fasilitas9" => "nullable|max:20",
            "fasilitas10" => "nullable|max:20",
            "harga" => "nullable|max:10"
        ]);

        kamar::where("id",$id)
                ->update($request->except(["_token","_method"]));

        $request->session()->flash("info","Berhasil Rubah Data Kamar");
    return redirect()->route("kamar.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kamar::destroy($id);

        return redirect()->route("kamar.index")
            ->with("info","Berhasil Hapus Data kamar");
    }
}
