@extends('layout.mainlayout')

@section('tittle', 'Dashboard')

@section('content')

  <h1>Welcome, {{ Auth::user()->username }}</h1>
{{-- @foreach (App/Models/Kategori::all() as $kategori )
  {{ $kategori->nama }}
{{-- @endforeach --} --}}
{{-- @foreach ($buku, $kategoribuku ,$koleksipribadi as $item ) --}}
  
  <a href="books"></a>
  <div class="row mt-5">
    <div class="col-lg-4">
      <div class="card-data books">
        <div class="row">
          <div class="col-6"><i class="bi bi-journal-bookmark-fill"></i></div>
          <div class="col-6 d-flex flex-column justify-content-center align-items-end">
            <div class="card-desc">BUKU</div>
            <div class="card-count">10</div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-4">
      <div class="card-data kategori">
        <div class="row">
          <div class="col-6"><i class="bi bi-list-task"></i></div>
          <div class="col-6 d-flex flex-column justify-content-center align-items-end">
            {{-- <a href="kategori" class="card-desc">KATEGORI</a> --}}
            <div class="card-desc">KATEGORI</div>
            <div class="card-count">10</div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="card-data koleksi">
        <div class="row">
          <div class="col-6"><i class="bi bi-clipboard-check"></i></div>
          <div class="col-6 d-flex flex-column justify-content-center align-items-end">
            <div class="card-desc">KOLEKSI</div>
            <div class="card-count">10</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- @endforeach --}}
  <div class="mt-5">
    <h2>Peminjaman</h2>

    <table class="table">
      <thead>
        <tr>
          <th>No.</th>
          <th>User</th>
          <th>Buku</th>
          <th>Tanggal peminjaman</th>
          <th>Tanggal pengembalian</th>
          <th>Status</th>
          <th>Aksi</th>
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
            <form onclick="return confirm('Apakah Kamu Yakin Untuk Menghapusnya?')" class="d-inline" action="/dashboard/{{ $item->id }}" method="POST">
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