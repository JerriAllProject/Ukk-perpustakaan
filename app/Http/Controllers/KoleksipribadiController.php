<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Koleksipribadi;
use Illuminate\Support\Facades\Auth;

class KoleksipribadiController extends Controller
{
    public function index()
    {
        $koleksipribadi = Koleksipribadi::all();
        return view('koleksipribadi', compact('koleksipribadi'));
    }

    public function destroy($id)
    {
        $koleksipribadi = Koleksipribadi::find($id);
        $koleksipribadi->delete();
        return redirect('koleksipribadi');
    }

    public function add()
    {
        $buku = Book::all();
        return view('koleksipribadi-add', compact('buku'));
    }

    public function store(Request $request)
    {
        $postData = ['user_id' => $request->user_id,
        'BukuID' => $request->BukuID];

        $postData['user_id'] = Auth::user()->id;
        $postData['BukuID'] = Auth::buku()->id;
        koleksipribadi::create($postData);
        return redirect('koleksipribadi')->with('berhasil di tambahkan');
    }
}
