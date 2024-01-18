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
        Schema::create('shopping_stages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('nomorPesanan');
            $table->string('tokenMidtrans');
            $table->integer('totalHarga');
            $table->boolean('status')->default(false);
            $table->boolean('selesai')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping_stages');
    }
};
