<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nik' => 'KRY001', 'nama_lengkap' => 'Budi Santoso', 'email' => 'budi@mail.com', 'no_telepon' => '08111111111', 'jenis_kelamin' => 'L', 'jabatan' => 'Manager', 'departemen' => 'HRD', 'tanggal_masuk' => '2020-01-01', 'gaji_pokok' => 8000000, 'status' => 'aktif'],
            ['nik' => 'KRY002', 'nama_lengkap' => 'Siti Rahayu', 'email' => 'siti@mail.com', 'no_telepon' => '08222222222', 'jenis_kelamin' => 'P', 'jabatan' => 'Staff', 'departemen' => 'Keuangan', 'tanggal_masuk' => '2020-02-01', 'gaji_pokok' => 5000000, 'status' => 'aktif'],
            ['nik' => 'KRY003', 'nama_lengkap' => 'Ahmad Fauzi', 'email' => 'ahmad@mail.com', 'no_telepon' => '08333333333', 'jenis_kelamin' => 'L', 'jabatan' => 'Developer', 'departemen' => 'IT', 'tanggal_masuk' => '2021-03-01', 'gaji_pokok' => 7000000, 'status' => 'aktif'],
            ['nik' => 'KRY004', 'nama_lengkap' => 'Dewi Lestari', 'email' => 'dewi@mail.com', 'no_telepon' => '08444444444', 'jenis_kelamin' => 'P', 'jabatan' => 'Designer', 'departemen' => 'IT', 'tanggal_masuk' => '2021-04-01', 'gaji_pokok' => 6000000, 'status' => 'aktif'],
            ['nik' => 'KRY005', 'nama_lengkap' => 'Riko Pratama', 'email' => 'riko@mail.com', 'no_telepon' => '08555555555', 'jenis_kelamin' => 'L', 'jabatan' => 'Supervisor', 'departemen' => 'Operasional', 'tanggal_masuk' => '2019-05-01', 'gaji_pokok' => 7500000, 'status' => 'cuti'],
            ['nik' => 'KRY006', 'nama_lengkap' => 'Rina Marlina', 'email' => 'rina@mail.com', 'no_telepon' => '08666666666', 'jenis_kelamin' => 'P', 'jabatan' => 'Staff', 'departemen' => 'HRD', 'tanggal_masuk' => '2022-06-01', 'gaji_pokok' => 4500000, 'status' => 'aktif'],
            ['nik' => 'KRY007', 'nama_lengkap' => 'Hendra Gunawan', 'email' => 'hendra@mail.com', 'no_telepon' => '08777777777', 'jenis_kelamin' => 'L', 'jabatan' => 'Akuntan', 'departemen' => 'Keuangan', 'tanggal_masuk' => '2020-07-01', 'gaji_pokok' => 6500000, 'status' => 'aktif'],
            ['nik' => 'KRY008', 'nama_lengkap' => 'Maya Sari', 'email' => 'maya@mail.com', 'no_telepon' => '08888888888', 'jenis_kelamin' => 'P', 'jabatan' => 'Marketing', 'departemen' => 'Pemasaran', 'tanggal_masuk' => '2021-08-01', 'gaji_pokok' => 5500000, 'status' => 'aktif'],
            ['nik' => 'KRY009', 'nama_lengkap' => 'Doni Setiawan', 'email' => 'doni@mail.com', 'no_telepon' => '08999999999', 'jenis_kelamin' => 'L', 'jabatan' => 'Teknisi', 'departemen' => 'Operasional', 'tanggal_masuk' => '2019-09-01', 'gaji_pokok' => 4000000, 'status' => 'nonaktif'],
            ['nik' => 'KRY010', 'nama_lengkap' => 'Fitri Handayani', 'email' => 'fitri@mail.com', 'no_telepon' => '08100000000', 'jenis_kelamin' => 'P', 'jabatan' => 'Sekretaris', 'departemen' => 'HRD', 'tanggal_masuk' => '2022-10-01', 'gaji_pokok' => 5000000, 'status' => 'aktif'],
        ];

        foreach ($data as $karyawan) {
            DB::table('karyawans')->insert(array_merge($karyawan, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}