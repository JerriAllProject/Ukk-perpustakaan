@extends('layout.mainlayout')

@section('tittle', 'ulasan')

@section('content')


      <div class="col-12 col-md-8 offset-md-2 col-lg-6 offeset-md-3">
        <h1 class="mb--5">Ulasan</h1>

        <form action="ulasan-add" method="post">
          @csrf
          <div class="mb-3">
            <label for="buku" class="form-label">Buku</label>
            <select name="buku_id" id="buku" class="form-control">
              <option value="">Select Book</option>
              @foreach ($buku as $item)
                <option value="{{ $item->id }}">{{ $item->judul }}</option>
              @endforeach
            </select>
          </div> 
          <div>
            <label for="ulasan" class="form-label">Ulasan</label>
            <textarea name="ulasan" id="ulasan" class="form-control" rows="3" required>
         </textarea>
        </div>
        <div>
          <label for="rating" class="form-label">Rating</label>
          <input type="number" name="rating" id="rating" class="form-control" max="5" required>
      </div>

          <div>
          <button type="submit" class="btn btn-primary">kirim</button>
          </div>
        </form>

@endsection