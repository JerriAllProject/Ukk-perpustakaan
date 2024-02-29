@extends('layout.mainlayout')

@section('tittle', 'Books')

@section('content')
  <h1>Book List</h1>

  <div class="mt-5 d-flex justify-content-end">
    <a href="book-add" class="btn btn-primary">Add Data</a>
  </div>

  <div class="my-5">
    <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Kategori</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ( $buku as $item )
        <tr>
          <td>{{ $loop->iteration}}</td>
          <td>{{ $item->judul}}</td>
          <td>{{ $item->penulis}}</td>
          <td>{{ $item->penerbit}}</td>
          <td>{{ $item->tahunterbit}}</td>
          @foreach( $item->categories as $kategori)
          <td>{{ $kategori->namakategori}}</td>
          @endforeach

          <td>
            <a class="btn btn-sm btn-warning" href="/book/{{ $item->id }}">Edit</a>
            <form onclick="return confirm('Apakah Kamu Yakin Untuk Menghapusnya?')" class="d-inline" action="/books/{{ $item->id }}" method="POST">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-sm btn-danger" >Delete</button>
          </form>
          </td>
        </tr>
    @endforeach
        </tbody>
    </table>
  </div>

@endsection