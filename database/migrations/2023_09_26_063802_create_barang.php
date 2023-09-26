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
        Schema::create('barang', function (Blueprint $table) {
            $table->id('id_barang');
            $table->string('nama_barang');
            $table->integer('harga');
            $table->integer('stok');
            $table->unsignedBigInteger('id_supplier'); // Ini adalah kolom foreign key

            // Mendefinisikan foreign key ke tabel 'supplier' dan kolom 'id_supplier'
            $table->foreign('id_supplier')->references('id_supplier')->on('supplier');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
