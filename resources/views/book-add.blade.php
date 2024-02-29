@extends('layout.mainlayout')

@section('tittle', 'add book')

@section('content')

<h1>Add New Book</h1>

    <div class="mt-5 w-25">
        <form action="/book-add" method="post">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" placeholder="Judul Name">
            </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Panulis</label>
                <input type="text" name="penulis" id="penulis" class="form-control" placeholder="Penulis Name">
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" name="penerbit" id="penerbit" class="form-control" placeholder="Penerbit Name">
            </div>
            <div class="mb-3">
                <label for="tahunterbit" class="form-label">Tahun Terbit</label>
                <input type="text" name="tahunterbit" id="number" class="form-control">
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select name="kategoribuku" id="kategori" class="form-control">
                    <option value="">Pilih Kategori</option>
                    @foreach ( $kategoribuku as $item )
                        <option value="{{ $item->id }}">{{ $item->namakategori }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>

@endsection