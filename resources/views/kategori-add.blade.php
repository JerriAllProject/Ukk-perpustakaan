@extends('layout.mainlayout')

@section('tittle', 'add kategori')

@section('content')

<h1>Add New Category</h1>

    <div class="mt-5 w-25">
        <form action="/kategori-add" method="post">
            @csrf
            <div>
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="namakategori" id="name" class="form-control" placeholder="Category Name">
            </div>

            <div class="mt-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>

@endsection