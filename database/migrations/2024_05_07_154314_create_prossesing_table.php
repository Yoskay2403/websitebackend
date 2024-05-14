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
        Schema::create('prossesing', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_pengajar');
            $table->foreign('id_pengajar')->references('id')->on('pengajar')->constrained();
            $table->string('nama_pengajar', 200)->required();

            $table->unsignedBigInteger('id_kelas');
            $table->foreign('id_kelas')->references('id')->on('kelas')->constrained();
            $table->string('nama_kelas', 200)->required();

            $table->unsignedBigInteger('id_peserta');
            $table->foreign('id_peserta')->references('id')->on('peserta')->constrained();
            $table->string('nama_peserta', 200)->required();

            $table->unsignedBigInteger('id_program');
            $table->foreign('id_program')->references('id')->on('program')->constrained();
            $table->string('nama_program', 200)->required();

            $table->integer('jumlah_peserta');
            $table->date('tahun_ajaran');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prossesing');
    }
};