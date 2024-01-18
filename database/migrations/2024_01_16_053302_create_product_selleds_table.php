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
        Schema::create('product_selleds', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('judul');
            $table->string('photourl');
            $table->text('deskripsi');
            $table->integer('harga')->default(0);
            $table->integer('stock')->default(0);
            $table->boolean('statusPembayaran')->default(true);

            $table->string('resi')->nullable();
            $table->boolean('metodePengiriman')->default(true);
            $table->date('tanggalPengiriman')->nullable();
            $table->date('tanggalPickup')->nullable();
            $table->string('namaPenerima')->nullable();
            $table->string('namaPemesan')->nullable();
            $table->string('nomorPenerima')->nullable();
            $table->text('alamat')->nullable();
            $table->string('kodePos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_selleds');
    }
};
