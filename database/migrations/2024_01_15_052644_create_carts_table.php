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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->uuid('product_id');
            $table->bigInteger('user_id');
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
        Schema::dropIfExists('carts');
    }
};
