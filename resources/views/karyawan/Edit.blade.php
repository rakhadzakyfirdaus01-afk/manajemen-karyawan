<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Tambah Karyawan</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('karyawan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>NIK</label>
            <input type="text" name="nik" class="form-control" value="{{ old('nik') }}">
        </div>
        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" value="{{ old('nama_lengkap') }}">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label>No. Telepon</label>
            <input type="text" name="no_telepon" class="form-control" value="{{ old('no_telepon') }}">
        </div>
        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select">
                <option value="">-- Pilih --</option>
                <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Jabatan</label>
            <input type="text" name="jabatan" class="form-control" value="{{ old('jabatan') }}">
        </div>
        <div class="mb-3">
            <label>Departemen</label>
            <input type="text" name="departemen" class="form-control" value="{{ old('departemen') }}">
        </div>
        <div class="mb-3">
            <label>Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" class="form-control" value="{{ old('tanggal_masuk') }}">
        </div>
        <div class="mb-3">
            <label>Gaji Pokok</label>
            <input type="number" name="gaji_pokok" class="form-control" value="{{ old('gaji_pokok') }}">
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-select">
                <option value="aktif" {{ old('status') == 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="nonaktif" {{ old('status') == 'nonaktif' ? 'selected' : '' }}>Non-Aktif</option>
                <option value="cuti" {{ old('status') == 'cuti' ? 'selected' : '' }}>Cuti</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>