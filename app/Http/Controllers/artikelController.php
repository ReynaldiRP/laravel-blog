<?php

namespace App\Http\Controllers;

use App\Models\artikelModel;
use App\Models\kategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class artikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = kategoriModel::all();
        $data = [
            'add_Kategori' => $artikel,
            'active' => request()->routeIs('artikel*') ? 'add_Kategori' : ''
        ];
        return view('addData.addArtikel', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $image = $request->file('gambar');
        $ext = $image->extension();
        $path = url("upload/" . $request->judul . '.' . $ext);
        $image->move(public_path("upload/"), $request->judul . '.' . $ext);

        $artikel = artikelModel::create([
            'judul' => $request->input('judul'),
            'slug' =>   Str::slug($request->judul),
            'gambar' => $path,
            'konten' => $request->input('konten'),
            'idKategori' => $request->input('kategori'),
            'author' => $request->input('author'),
            'tgl_publish' => $request->input('tanggal'),
        ]);

        return redirect()->route('homeArtikel.index', ['artikel' => $artikel]);
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
     * @param  \App\Models\artikelModel  $artikelModel
     * @return \Illuminate\Http\Response
     */
    public function show(artikelModel $artikelModel)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\artikelModel  $artikelModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = artikelModel::findOrFail($id);
        $kategori = kategoriModel::all();
        return view('updateData.updateArtikel', compact('artikel', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\artikelModel  $artikelModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $artikel = artikelModel::findOrFail($id);
        if ($request->hasFile('gambar')) {
            // Menghapus gambar lama
            if (file_exists(public_path($artikel->gambar))) {
                unlink(public_path($artikel->gambar));
            }

            // Upload gambar baru
            $image = $request->file('gambar');
            $ext = $image->extension();
            $path = url('upload/' . $request->judul . '.' . $ext);
            $image->move(public_path('upload'), $path);
            $artikel->gambar = $path;
        }

        $artikel->judul = $request->input('judul');
        $artikel->slug =   Str::slug($request->judul);
        $artikel->konten = $request->input('konten');
        $artikel->idKategori = $request->input('kategori');
        $artikel->author = $request->input('author');
        $artikel->tgl_publish = $request->input('tanggal');
        $artikel->save();
        return redirect()->route('homeArtikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\artikelModel  $artikelModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(artikelModel $artikelModel, $id)
    {
        $artikelModel = artikelModel::findorfail($id);
        $artikelModel->delete();
        return redirect()->route('homeArtikel.index')
            ->withSuccess(__('datas delete successfully.'));
    }
}
