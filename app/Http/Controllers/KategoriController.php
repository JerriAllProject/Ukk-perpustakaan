<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Database\Seeders\kategoribuku;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoribuku = Kategori::all();
        return view('kategori', compact('kategoribuku'));
    }

    public function add()
    {
        return view('kategori-add');
    }

    public function store(Request $request)
    {
        $data = $request->namakategori;
        Kategori::create([
            'namakategori' => $data
        ]);
        return redirect('kategori');
    }

    // public function edit()
    // {
    //     return view('kategori-edit');
    // }

    public function edit($id)
    {
        $kategoribuku = Kategori::find($id);
        return view('kategori-edit' , compact('kategoribuku')); 
    }

    public function destroy($id)
    {
        $kategoribuku = Kategori::find($id);
        $kategoribuku->delete();
        return redirect('kategori');
    }

    public function update(Request $request ,$id)
    {
        $kategoribuku = Kategori::find($id);
        $kategoribuku->update($request->all());

        return redirect('kategori');
    }
}
