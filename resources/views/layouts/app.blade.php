<!DOCTYPE html>
<html>
<head>
    <title>Gaji App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <nav class="mb-3">
        <h2>Manajemen Gaji</h2>
        <a href="/" class="btn btn-dark">Dashboard</a>
        <a href="/karyawan" class="btn btn-primary">Karyawan</a>
        <a href="/gaji" class="btn btn-success">Gaji</a>
        <a href="/laporan" class="btn btn-warning">Laporan</a>
    </nav>
    <hr>
    @yield('content')
</div>
</body>
</html>