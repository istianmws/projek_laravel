<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //try
        return view('inventory.index', ["setTitle" => "App"]);
        $barangs = Barang::all();
        // return view('inventory.index', ['barangs' => $barangs, 'layout' => 'index', "setTitle" => "App"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('inventory.create', ["setTitle" => "Tambah"]);
        


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'  => 'required|max:255',
            'foto'  => 'required',
            'kondisi'=>'required',
            'jumlah'=> 'required'
        ]);

        Barang::create([
            'nama'  => $validated['nama'],
            'foto'  => $validated['foto'],
            'kondisi'=>$validated['kondisi'],
            'jumlah'=> $validated['jumlah']
        ]);
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
        $barangs = Barang::findOrFail($id);
        return view('inventory.show', compact('barangs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // //
        // return view('inventory.edit', ["setTitle" => "Ubah"]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
