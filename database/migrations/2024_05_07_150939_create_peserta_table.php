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
        Schema::create('peserta', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peserta', 200)->required();
            $table->unsignedBigInteger('id_program');
            $table->foreign('id_program')->references('id')->on('program')->constrained();
            $table->integer('usia_peserta');
            $table->string('alamat', 200)->required();
            $table->string('varcar', 50)->required();
            $table->string('TTL', 100)->required();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta');
    }
};