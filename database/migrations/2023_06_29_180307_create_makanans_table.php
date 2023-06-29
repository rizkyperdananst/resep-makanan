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
        Schema::create('makanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_makanan_id')->constrained('kategori_makanans')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('gambar')->nullable();
            $table->string('nama');
            $table->longText('resep');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makanans');
    }
};
