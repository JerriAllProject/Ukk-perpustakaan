@extends('layout.mainlayout')

@section('tittle', 'Komentar')

@section('content')

    <h1>Komentar</h1>
    
      <div class="my-3">
        <table class="table">
          <thead>
            <tr>
              <th>No.</th>
              <th>User</th>
              <th>Judul</th>
              <th>Ulasan</th>
              <th>Rating</th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $pinjam as $item )
            <tr>
              <td>{{ $loop->iteration}}</td>
              <td>{{ $item->user->username}}</td>
              <td>{{ $item->buku->judul}}</td>
              <td>{{ $item->ulasan}}</td>
              <td>{{ $item->rating}}</td>
            </tr>
        @endforeach
          </tbody>
        </table>
      </div>

@endsection