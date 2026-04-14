<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register - Sistem Gaji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #dbeafe, #f3f4f6);
            font-family: Arial, sans-serif;
        }

        .register-card {
            width: 400px;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body>

<div class="d-flex justify-content-center align-items-center vh-100">

    <div class="register-card">

        <h4 class="text-center mb-2">Daftar Akun</h4>
        <p class="text-center text-muted mb-4">Buat akun sistem penggajian</p>

        <!-- ERROR -->
        @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <!-- FORM -->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- NAME -->
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <!-- EMAIL -->
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <!-- PASSWORD -->
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <!-- CONFIRM PASSWORD -->
            <div class="mb-3">
                <label>Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success w-100">
                Daftar
            </button>
        </form>

        <div class="text-center mt-3">
            <a href="/login" class="text-decoration-none">
                Sudah punya akun? Login
            </a>
        </div>

        <hr>

        <div class="text-center">
            <small class="text-muted">© Sistem Penggajian</small>
        </div>

    </div>

</div>

</body>
</html>