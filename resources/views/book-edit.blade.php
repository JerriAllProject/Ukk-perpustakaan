@extends('layout.mainlayout')

@section('tittle', 'edit books')

@section('content')

<h1>edit Books</h1>

    <div class="mt-5 w-25">
        <form action="{{ route('book.edit', ['id' => $buku->id])  }}" method="post">
            @csrf
            <div>
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{$buku->judul}}">
            </div>
            <div>
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" name="penulis" id="penulis" class="form-control" value="{{$buku->penulis}}">
            </div>
            <div>
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" name="penerbit" id="penerbit" class="form-control" value="{{$buku->penerbit}}">
            </div>
            <div>
                <label for="tahunterbit" class="form-label">Tahun Terbit</label>
                <input type="number" name="tahunterbit" id="tahunterbit" class="form-control" value="{{$buku->tahunterbit}}">
            </div>

            <div class="mt-3">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>

@endsection