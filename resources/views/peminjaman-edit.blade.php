@extends('layout.mainlayout')

@section('tittle', 'Peminjaman')

@section('content')
    
    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offeset-md-3">
      <h1 class="mb--5">Peminjaman</h1>
      
          <form action="{{ route('peminjaman.edit', ['id' => $pinjam->id])  }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="statuspeminjaman" class="form-label">Status Peminjaman</label>
              <select name="statuspeminjaman" id="statuspeminjaman" class="form-control">
                <option value=""></option>
                  <option>DiKembalikan</option>
              </select>
        </div> 
            <div>
              <button type="submit" class="btn btn-primary w-100">Kembalikan</button>
            </div>
          </form>
    </div>


@endsection