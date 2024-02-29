@extends('layout.mainlayout')

@section('tittle', 'edit kategori')

@section('content')

<h1>edit Category</h1>

    <div class="mt-5 w-25">
    <form action="{{ route('kategori.edit', ['id' => $kategoribuku->id])  }}" method="post">
            @csrf
            <div>
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="namakategori" id="name" class="form-control" value="{{$kategoribuku->namakategori}}" placeholder="Category Name">
            </div>

            <div class="mt-3">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>

@endsection