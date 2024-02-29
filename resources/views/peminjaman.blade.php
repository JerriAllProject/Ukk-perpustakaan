@extends('layout.mainlayout')

@section('tittle', 'Peminjaman')

@section('content')

    <h1>Peminjaman List</h1>

    <div class="mt-5 d-flex justify-content-end">
      <a href="peminjaman-add" class="btn btn-primary">Pinjam Buku</a>
    </div>

      <div class="my-3">
        <table class="table">
          <thead>
            <tr>
              <th>No.</th>
              <th>User</th>
              <th>Buku</th>
              <th>Tanggal Peminjaman</th>
              <th>tanggal Pengembalian</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $pinjam as $item )
            <tr>
              <td>{{ $loop->iteration}}</td>
              <td>{{ $item->user->username}}</td>
              <td>{{ $item->buku->judul}}</td>
              <td>{{ $item->tanggalpeminjaman}}</td>
              <td>{{ $item->tanggalpengembalian}}</td>
              <td>{{ $item->statuspeminjaman}}</td>
              <td>
                <a class="btn btn-sm btn-warning" href="/peminjaman/{{ $item->id }}">Kembalikan</a>
            </tr>
          </td>
        @endforeach
          </tbody>
        </table>
      </div>

@endsection