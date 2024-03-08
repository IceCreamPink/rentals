<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penyewaans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pelanggan');
            $table->integer('id_kendaraan');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->integer('total_biaya');
            $table->date('tgl_pengembalian');
            $table->enum('kondisi_kendaraan', ['baik', 'rusak']);
            $table->integer('denda');
            $table->enum('status_pembayaran', ['dibayar', 'belum dibayar']);
            $table->integer('id_user');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyewaans');
    }
};