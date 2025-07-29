<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangElektronikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_elektronik', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang')->unique();
            $table->string('kode_barang')->unique();
            $table->string('kategori');
            $table->string('merk')->nullable();
            $table->string('model')->nullable();
            $table->integer('tahun_pembelian');
            $table->enum('kondisi', ['Baik', 'Rusak Ringan', 'Rusak Berat']);
            $table->integer('jumlah');
            $table->string('lokasi_penyimpanan');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang_elektronik');
    }
}
