<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::latest()->paginate(10);
        return view('karyawan.index', compact('karyawans'));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik'           => 'required|unique:karyawans,nik',
            'nama_lengkap'  => 'required',
            'email'         => 'required|email|unique:karyawans,email',
            'jenis_kelamin' => 'required',
            'jabatan'       => 'required',
            'departemen'    => 'required',
            'tanggal_masuk' => 'required|date',
            'gaji_pokok'    => 'required|numeric',
            'status'        => 'required',
        ]);

        Karyawan::create($request->all());

        return redirect()->route('karyawan.index')
            ->with('success', 'Karyawan berhasil ditambahkan!');
    }

    public function edit(Karyawan $karyawan)
    {
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, Karyawan $karyawan)
    {
        $request->validate([
            'nik'           => 'required|unique:karyawans,nik,' . $karyawan->id,
            'nama_lengkap'  => 'required',
            'email'         => 'required|email|unique:karyawans,email,' . $karyawan->id,
            'jenis_kelamin' => 'required',
            'jabatan'       => 'required',
            'departemen'    => 'required',
            'tanggal_masuk' => 'required|date',
            'gaji_pokok'    => 'required|numeric',
            'status'        => 'required',
        ]);

        $karyawan->update($request->all());

        return redirect()->route('karyawan.index')
            ->with('success', 'Data karyawan berhasil diperbarui!');
    }

    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();

        return redirect()->route('karyawan.index')
            ->with('success', 'Karyawan berhasil dihapus!');
    }
}