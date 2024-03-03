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
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kendaraan', 100);
            $table->integer('id_type');
            $table->integer('id_merk');
            $table->string('plat_no', 10);
            $table->string('tahun_produksi', 4);
            $table->enum('status', ['tersedia', 'disewa', 'perbaikan']);
            $table->integer('tarif');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};