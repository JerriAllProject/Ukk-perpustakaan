@extends('layout.mainlayout')

@section('tittle', 'Koleksipribadi')

@section('content')

  <h1>Koleksi Pribadi</h1>

    <div class="mt-5 d-flex justify-content-end">
      <a href="koleksipribadi-add" class="btn btn-primary">Tambah Koleksi</a>
    </div>

    <div class="my-5">
      <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Buku</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $koleksipribadi as $item )
          <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $item->user->username}}</td>
            <td>{{ $item->BukuID}}</td>
            <td>
              <form onclick="return confirm('Apakah Kamu Yakin Untuk Menghapusnya?')" class="d-inline" action="/koleksipribadi/{{ $item->id }}" method="POST">
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