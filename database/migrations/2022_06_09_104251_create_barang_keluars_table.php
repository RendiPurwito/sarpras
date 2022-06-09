<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_keluars', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam');
            $table->foreignId('barang_id');
            $table->binary('foto');
            $table->integer('jumlah_barang');
            $table->date('tanggal_keluar');
            $table->string('keterangan');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE barang_keluars MODIFY foto MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang_keluars');
    }
};
