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
        Schema::table('prossesing', function (Blueprint $table) {
            $table->dropForeign(['id_pengajar']);

            $table->foreign('id_pengajar')->references('id')->on('pengajar')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->dropForeign(['id_kelas']);

            $table->foreign('id_kelas')->references('id')->on('kelas')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->dropForeign(['id_peserta']);

            $table->foreign('id_peserta')->references('id')->on('peserta')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->dropForeign(['id_program']);

            $table->foreign('id_program')->references('id')->on('program')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prossesing', function (Blueprint $table) {
            //
        });
    }
};