<?php

namespace App\Http\Controllers;

use App\Models\kategoriModel;
use Illuminate\Http\Request;

class homeKategoriController extends Controller
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
        $data = [
            'kategori' => $kategori,
            'active' => request()->routeIs('homeKategori*') ? 'kategori' : ''
        ];
        return view("homepage.homeKategori", $data);
    }
}
