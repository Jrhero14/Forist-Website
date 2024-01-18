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
        Schema::create('product_selled_shopping_stage', function (Blueprint $table) {
            $table->id();
            $table->string('product_selled_id');
            $table->bigInteger('shopping_stage_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_selleds_shopping_stages');
    }
};
