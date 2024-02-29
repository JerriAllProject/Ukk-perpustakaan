<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $buku = Book::with('categories')->get();
        // dd($buku);
        return view('books', compact('buku'));
    }

    public function add()
    {
        $kategoribuku = Kategori::all();
        return view('book-add', compact('kategoribuku'));
    }

    public function store(Request $request)
    {
        $postData = ['judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahunterbit' => $request->tahunterbit];

        Book::create($postData);
        return redirect('/books')->with('Sukses','Data berhasil DiTambahkan');
    }

    public function edit($id)
    {
        $buku = Book::find($id);
        return view('book-edit', compact('buku'));
    }

    public function destroy($id)
    {
        $buku = Book::find($id);
        $buku->delete();
        return redirect('books');
    }

    public function update(Request $request, $id)
    {
        $buku = Book::find($id);
        $buku->update($request->all());

        return redirect('books');
    }
}
