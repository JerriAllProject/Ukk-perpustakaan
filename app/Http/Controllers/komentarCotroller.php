<?php

namespace App\Http\Controllers;

use App\Models\ulasan;
use Illuminate\Http\Request;

class komentarCotroller extends Controller
{
    //
    public function index()
    {
        $pinjam = ulasan::all();
        return view('komentar', compact('pinjam'));
    }
}
