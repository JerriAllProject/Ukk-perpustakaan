@extends('layout.mainlayout')

@section('tittle', 'add Peminjaman')

@section('content')
    
    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offeset-md-3">
      <h1 class="mb--5">Peminjaman</h1>
      
          <form action="/peminjaman-add" method="post">
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
            <div class="mb-3">
              <label for="statuspeminjaman" class="form-label">Status Peminjaman</label>
              <select name="statuspeminjaman" id="statuspeminjaman" class="form-control">
                <option value=""></option>
                  <option>DiPinjam</option>
              </select>
        </div> 
            <div>
              <button type="submit" class="btn btn-primary w-100">Pinjam</button>
            </div>
          </form>
    </div>


@endsection