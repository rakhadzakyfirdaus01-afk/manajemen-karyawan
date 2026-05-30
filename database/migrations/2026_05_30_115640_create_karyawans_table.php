<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 20)->unique();
            $table->string('nama_lengkap', 100);
            $table->string('email', 100)->unique();
            $table->string('no_telepon', 15)->nullable();
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('jabatan', 100);
            $table->string('departemen', 100);
            $table->date('tanggal_masuk');
            $table->decimal('gaji_pokok', 15, 2)->default(0);
            $table->enum('status', ['aktif', 'nonaktif', 'cuti'])->default('aktif');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};