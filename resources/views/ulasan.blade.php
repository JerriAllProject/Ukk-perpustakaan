@extends('layout.mainlayout')

@section('tittle', 'Ulasan')

@section('content')

    <h1>Ulasan</h1>

    <div class="mt-5 d-flex justify-content-end">
      <a href="ulasan-add" class="btn btn-primary">Komentar</a>
    </div>

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
              <td>
                <a class="btn btn-sm btn-warning" href="/ulasan/{{ $item->id }}">Edit</a>
                <form onclick="return confirm('Apakah Kamu Yakin Untuk Menghapusnya?')" class="d-inline" action="/ulasan/{{ $item->id }}" method="POST">
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