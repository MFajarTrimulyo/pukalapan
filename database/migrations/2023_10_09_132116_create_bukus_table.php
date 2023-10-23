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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('kd_buku');
            $table->string('foto');
            $table->string('judul_buku');
            $table->unsignedBigInteger('kategoriId');
            $table->string('author');
            $table->string('stock');
            $table->text('sinopsis');
                   
            $table->timestamps();

            $table->foreign('kategoriId')->references('id')->on('kategori_bukus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
