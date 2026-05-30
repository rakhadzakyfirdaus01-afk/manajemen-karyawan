# Sistem Manajemen Karyawan

Aplikasi web CRUD untuk mengelola data karyawan menggunakan Laravel.
Dibuat sebagai Tugas Akhir PKL SMK Kelas X RPL.

## Teknologi yang Digunakan
- Backend  : Laravel 12
- Database : MySQL
- Frontend : Bootstrap 5
- Version Control : Git

## Fitur Aplikasi
- Menampilkan daftar karyawan
- Tambah data karyawan baru
- Edit data karyawan
- Hapus data karyawan

## Struktur Database
Tabel: karyawans
- id
- nik
- nama_lengkap
- email
- no_telepon
- jenis_kelamin
- jabatan
- departemen
- tanggal_masuk
- gaji_pokok
- status
- created_at
- updated_at

## Cara Menjalankan
1. Clone project ini
2. Jalankan: composer install
3. Copy .env.example ke .env
4. Atur database di file .env
5. Jalankan: php artisan migrate
6. Jalankan: php artisan db:seed --class=KaryawanSeeder
7. Jalankan: php artisan serve
8. Buka: http://localhost:8000/karyawan

## Pembuat
Nama  : [Rakha dzaky firdaus]
Kelas : X RPL
Tahun : 2024/2025