<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan | @yield('tittle')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Perpustakaan</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </nav>

        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarSupportedContent">
                    @if (Auth::user())
                        @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 3)
                                <a href="dashboard" @if (request()->route()->uri == 'dashboard') class='active'
                                    @endif>Dashboard</a>
                                <a href="books" @if (request()->route()->uri == 'books') class='active'
                                    @endif>Buku</a>
                                <a href="kategori" @if (request()->route()->uri == 'kategori') class='active'
                                    @endif>Kategori Buku</a>
                                <a href="komentar" @if (request()->route()->uri == 'ulasan') class='active'
                                    @endif>Komentar Peminjam</a>
                                <a href="logout" @if (request()->route()->uri == 'logout') class='active'
                                    @endif>Logout</a>
                        @else
                                <a href="profile" @if (request()->route()->uri == 'profile') class='active'
                                    @endif>Profile</a>
                                <a href="peminjaman" @if (request()->route()->uri == 'peminjaman') class='active'
                                    @endif>Peminjaman</a>
                                <a href="ulasan" @if (request()->route()->uri == 'ulasan') class='active'
                                    @endif>Ulasan</a>
                                 <a href="koleksipribadi" @if (request()->route()->uri == 'koleksipribadi') class='active'
                                    @endif>Koleksi Pribadi</a>
                                <a href="logout" @if (request()->route()->uri == 'logout') class='active'
                                    @endif>Logout</a>
                        @endif
                        @else
                        <a href="/login">login</a>
                    @endif
                </div>
                <div class="content p-5 col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>