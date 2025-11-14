<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Selamat datang, {{ Auth::user()->name }}</h3>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-danger">Logout</button>
        </form>
    </div>
    <p>Ini halaman dashboard. Hanya bisa diakses setelah login.</p>
</body>
</html>
