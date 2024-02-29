<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Kategori;
use App\Models\Koleksipribadi;
use App\Models\peminjaman;

class DashboardController extends Controller
{
    public function index()
    {
        // $buku = Book::all();
        // $kategoribuku = Kategori::all();
        // $koleksipribadi = Koleksipribadi::all();
        // return view('dashboard', compact('buku', 'kategoribuku', 'koleksipribadi'));
        // $bukuCount = Book::all()->count();
        // $bukuCount = Book::all();
        // $kategoribukuCount = Kategori::all();
        // $koleksipribadiCount = Koleksipribadi::all();
        // return view ('dashboard', ['buku_count' => $bukuCount, 'kategoribuku_count' => $kategoribukuCount, 'Koleksipribadi' => $koleksipribadiCount]);
        $pinjam = peminjaman::all();
        return view('dashboard', compact('pinjam'));
    }

    public function destroy($id)
    {
        $pinjam = peminjaman::find($id);
        $pinjam->delete();
        return redirect('dashboard');
    }
}
