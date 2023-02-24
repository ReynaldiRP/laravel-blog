<?php

namespace App\Http\Controllers;

use App\Models\artikelModel;
use App\Models\kategoriModel;
use Illuminate\Http\Request;


class homeArtikelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kategori = kategoriModel::all();
        $artikel = artikelModel::Orderby('tgl_publish', 'DESC')->with('kategori')
            ->get();
        $data = [
            'kategori' => $kategori,
            'artikel'  => $artikel,
            'active' => request()->routeIs('homeArtikel*') ? 'artikel' : ''
        ];
        return view('homepage.homeArtikel', $data);
    }
}
