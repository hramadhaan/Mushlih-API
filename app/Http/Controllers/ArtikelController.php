<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //

    }

    public function index()
    {
        $data = Artikel::all();
        return response($data);
    }

    public function store(Request $request) {
        $data = new Artikel();
        $data->judul = $request->input('judul');
        $data->article = $request->input('article');
        $data->gambar = $request->input('gambar');
        $data->save();

        return response()->json(['Status'=>'Berhasil']);
    }

    //
}
