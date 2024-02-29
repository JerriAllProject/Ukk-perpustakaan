<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UlasanController extends Controller
{
    public function index()
    {
        $pinjam = ulasan::all();
        return view('ulasan', compact('pinjam'));
    }

    public function add()
    {
        $buku = Book::all();
        return view('ulasan-add', compact('buku'));
    }

    public function store(Request $request)
    {
        $postData = ['user_id' => $request->user_id,
            'buku_id' => $request->buku_id,
            'ulasan' => $request->ulasan,
            'rating' => $request->rating];

            $postData['user_id'] = Auth::user()->id;
        ulasan::create($postData);
        return redirect('/ulasan')->with('Sukses','Data berhasil DiTambahkan');
    }

    public function destroy($id)
    {
        $pinjam = ulasan::find($id);
        $pinjam->delete();
        return redirect('ulasan');
    }
}
