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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('no_identitas', 16);
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->date('tgl_pesan');
            $table->enum('nama_paket', ['STANDAR', 'DELUXE', 'EXECUTIF']);
            $table->integer('durasi');
            $table->enum('sarapan', ['Iya', 'Tidak']);
            $table->decimal('harga_paket', 13, 4);
            $table->decimal('harga_layanan', 13, 4);
            $table->decimal('diskon', 13, 4);
            $table->decimal('total_tagihan', 13, 4);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
