<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Karyawan</title>
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

<div class="container py-4">
    <h4 class="fw-bold mb-4"><i class="bi bi-list-ul me-2"></i>Daftar Karyawan</h4>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0 align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th class="ps-3">#</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Departemen</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($karyawans as $i => $k)
                        <tr>
                            <td class="ps-3">{{ $karyawans->firstItem() + $i }}</td>
                            <td><code>{{ $k->nik }}</code></td>
                            <td>{{ $k->nama_lengkap }}</td>
                            <td>{{ $k->jabatan }}</td>
                            <td>{{ $k->departemen }}</td>
                            <td>
                                @if($k->status === 'aktif')
                                    <span class="badge bg-success">Aktif</span>
                                @elseif($k->status === 'nonaktif')
                                    <span class="badge bg-danger">Non-Aktif</span>
                                @else
                                    <span class="badge bg-warning text-dark">Cuti</span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">Belum ada data.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-3 d-flex justify-content-center">
        {{ $karyawans->links() }}
    </div>
</div>

</body>
</html>