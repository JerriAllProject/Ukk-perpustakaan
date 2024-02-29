@extends('layout.mainlayout')

@section('tittle', 'Kategori')

@section('content')
  <h1>Category list</h1>


    <div class="mt-5 d-flex justify-content-end">
      <a href="kategori-add" class="btn btn-primary">Add Data</a>
    </div>

  <div class="my-5">
    <table class="table">
      <thead>
        <tbody>
        <tr>
          <th>No.</th>
          <th>NamaKategori</th>
          <th>Aksi</th>
        </tr>
      </thead>
    </tbody>
    @foreach ( $kategoribuku as $item )
        <tr>
          <td>{{ $loop->iteration}}</td>
          <td>{{ $item->namakategori}}</td>
          <td>
            <a class="btn btn-sm btn-warning" href="/kategori/{{ $item->id }}">Edit</a>
            <form onclick="return confirm('Apakah Kamu Yakin Untuk Menghapusnya?')" class="d-inline" action="/kategori/{{ $item->id }}" method="POST">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-sm btn-danger" >Delete</button>
          </form>
          </td>
        </tr>
    @endforeach
    </table>
  </div>

@endsection