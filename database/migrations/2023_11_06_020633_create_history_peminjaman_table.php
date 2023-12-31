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
        Schema::create('history_peminjaman', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('peminjaman_id');
            $table->string('namauser');
            $table->string('namabuku');
            $table->string('kategori');
            $table->string('status');
            $table->timestamps();

            $table->foreignId('peminjaman_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_peminjaman');
    }
};
