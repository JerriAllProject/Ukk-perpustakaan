<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
    .main{
        height: 90vh;
    }

    .register-box {
        width: 400px;
        border: solid 1px;
        padding:20px;
    }

    form div{
        margin-bottom: 1opx;
    }

</style>
<body>
    
    <div class="main d-flex flex-column justify-content-center align-items-center">
        @if (session('status'))
        <div class="alert alert-success" style="width: 500px">
            {{ session('message') }}
        </div>
        @endif
        <div class="register-box">
            <form action="#" method="post">
                @csrf
                <div>
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div>
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div>
                    <label for="namalengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" name="namalengkap" id="namalegkap" class="form-control" required>
                </div>
                <div>
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" rows="3" required>
                 </textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary form-control">Lanjutkan</button>
                </div>
                <div  class="text-center">
                    kalo sudah punya akun silahkan<a href="login">Login</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>