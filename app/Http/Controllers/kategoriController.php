<?php

namespace App\Http\Controllers;

use App\Models\kategoriModel;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = kategoriModel::all();
        $data = [
            'addKategori' => $kategori,
            'active' => request()->routeIs('kategori*') ? 'addKategori' : ''
        ];
        return view('addData.addKategori', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $kategori = kategoriModel::create([
            'nama' => $request->input('nama'),
            'jenis' => $request->input('jenis'),
        ]);
        return redirect()->route('homeKategori.index', ['kategori' => $kategori])
            ->withSuccess('Berrhasil mengupdate data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kategoriModel  $kategoriModel
     * @return \Illuminate\Http\Response
     */
    public function show(kategoriModel $kategoriModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategoriModel  $kategoriModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = kategoriModel::findOrFail($id);
        return view('updateData.updateKategori', ['kategori' => $kategori]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kategoriModel  $kategoriModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kategori = kategoriModel::findOrFail($id);
        $kategori->nama = $request->input('nama');
        $kategori->jenis = $request->input('jenis');
        $kategori->save();
        return redirect()->route('homeKategori.index')
            ->withSuccess('Berrhasil mengupdate data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategoriModel  $kategoriModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategoriModel = kategoriModel::findorfail($id);
        $kategoriModel->delete();
        return redirect()->route('homeKategori.index')
            ->withSuccess('Datas berhasil dihapus');
    }
}
