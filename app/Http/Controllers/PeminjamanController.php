<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    public function index()
    {
        $pinjam = peminjaman::with('buku')->where('user_id',Auth::user()->id)->get();
        return view('peminjaman', compact('pinjam'));
    }

    public function add()
    {
        $buku = Book::all();
        return view('peminjaman-add', compact('buku'));
    }

    public function store(Request $request)
    {
        $postData = ['user_id' => $request->user_id,
            'buku_id' => $request->buku_id,
            // 'tanggalpeminjaman' => $request->tanggalpeminjaman,
            // 'tanggalpengembalian' => $request->tanggalpengembalian,
            'statuspeminjaman' => $request->statuspeminjaman];

            $postData['tanggalpeminjaman'] = Carbon::now()->toDateString();
            $postData['tanggalpengembalian'] = Carbon::now()->addday(3)->toDateString();
            $postData['user_id'] = Auth::user()->id;

            peminjaman::create($postData);
        return redirect('/peminjaman')->with('Sukses','Data berhasil DiTambahkan');
    }

    public function edit($id)
    {
        $pinjam = peminjaman::find($id);
        return view('peminjaman-edit', compact('pinjam'));
    }

    public function update(Request $request ,$id)
    {
        $kategoribuku = peminjaman::find($id);
        $kategoribuku->update($request->all());

        return redirect('peminjaman');
    }
}
