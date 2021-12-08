<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Desa Penglipuran</title>
    <link rel="stylesheet" href="{{ asset('admin/css/sb-admin-2.css') }}">
</head>

<body class="pt-5 mt-5">
    <div class="container mt-5">
        <div class="row pt-5">
            <div class="col-6 d-flex justify-content-center">
                {{-- Gambar Login --}}
                <div class="shadow">
                    <img src="{{ asset('admin/img/login-penglipuran.jpg') }}" alt="Logo Penglipuran"
                        class="img-fluid">
                </div>
            </div>

            <div class="col-6 border shadow-sm d-flex justify-content-center pt-3">
                {{-- Form Login --}}
                <div class="w-75">
                    <div class="d-flex justify-content-center my-4">
                        <a href="/">
                            <center>
                                <img src="{{ asset('admin/img/logo-penglipuran.png') }}" width="60%"
                                    alt="Logo Penglipuran">
                            </center>
                        </a>
                    </div>
                    <form action="{{ url('login') }}" method="POST">
                        @csrf
                        <div class="form-group mt-4">
                            @if (session('status'))
                                <small class="text-danger text-center d-block">{{ session('status') }}</small>
                            @endif
                            <label for="username">Username :</label>
                            <input name="username" type="text" class="form-control form-control-sm" id="username"
                                placeholder="Username" autofocus required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input name="password" type="password" class="form-control form-control-sm" id="password"
                                placeholder="Password" required>
                        </div>
                        <div class="form-group d-flex justify-content-end">
                            <button type="submit" class="btn btn-dark btn-sm mt-2 px-5">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
