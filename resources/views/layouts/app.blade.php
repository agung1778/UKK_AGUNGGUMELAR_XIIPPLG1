<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gaji App</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }

        /* SIDEBAR */
        .sidebar {
            width: 240px;
            height: 100vh;
            position: fixed;
            background: linear-gradient(180deg, #5ab8cd, #6fb0ff);
            color: white;
            padding-top: 20px;
        }

        .sidebar a {
            color: white;
            display: block;
            padding: 12px 20px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: rgba(255,255,255,0.2);
        }

        /* CONTENT */
        .main {
            margin-left: 240px;
            padding: 20px;
        }

        /* NAVBAR */
        .navbar-custom {
            background: linear-gradient(90deg, #59d0fc, #59c4c8);
            color: white;
        }

        /* CARD */
        .card {
            border: none;
            border-radius: 12px;
        }

        /* RESPONSIVE */
        @media(max-width:768px){
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .main {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h4 class="text-center">Gaji App</h4>

    <a href="/">Dashboard</a>
    <a href="/karyawan">Karyawan</a>
    <a href="/gaji">Gaji</a>
    <a href="/laporan">Laporan</a>
</div>

<!-- MAIN -->
<div class="main">

    <!-- NAVBAR -->
    <nav class="navbar navbar-custom mb-3 p-2 rounded">
        <span>Dashboard</span>
    </nav>

    <!-- NOTIF -->
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @yield('content')

</div>

</body>
</html>