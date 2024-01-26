<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

use function Ramsey\Uuid\v1;

class KategoriController2 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori', ['kategori'=>$kategori]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahkategori');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        kategori::create([
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi 
        ]);

        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategori = Kategori::find($id);
        return view('detail', ['kategori' => $kategori]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = Kategori::find($id);
        return view('editkategori', ['kategori' => $kategori]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Kategori::find($id)->update([
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi
        ]);;

        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        kategori::find($id)->delete();
        return redirect()->route('kategori.index');
    }
}
