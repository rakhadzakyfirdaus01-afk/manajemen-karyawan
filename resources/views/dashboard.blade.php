<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <span class="navbar-brand fw-bold"><i class="bi bi-people-fill me-2"></i>HR System</span>
        <div class="ms-auto d-flex align-items-center gap-3">
            <span class="text-white">{{ auth()->user()->name }}</span>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-outline-light btn-sm">Logout</button>
            </form>
        </div>
    </div>
</nav>

<div class="container py-5 text-center">
    @if(auth()->user()->isAdmin())
        <h3 class="fw-bold">Selamat datang, Admin! 👋</h3>
        <p class="text-muted">Kamu bisa mengelola data karyawan.</p>
        <a href="{{ route('karyawan.index') }}" class="btn btn-primary mt-3">
            <i class="bi bi-people-fill me-2"></i>Kelola Karyawan
        </a>
    @else
        <h3 class="fw-bold">Selamat datang, {{ auth()->user()->name }}! 👋</h3>
        <p class="text-muted">Kamu bisa melihat daftar karyawan.</p>
        <a href="{{ route('karyawan.user') }}" class="btn btn-primary mt-3">
            <i class="bi bi-list-ul me-2"></i>Lihat Daftar Karyawan
        </a>
    @endif
</div>

</body>
</html>