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
        Schema::create('absen_siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            $table->unsignedBigInteger("id_disabilitas");
            $table->foreign("id_disabilitas")->references('id_disabilitas')->on('disabilitas')->onDelete('cascade');
            $table->unsignedBigInteger('id_kelas');
            $table->foreign("id_kelas")->references('id_kelas')->on('kelas')->onDelete('cascade');
            $table->string('alasan',255);
            $table->string('file',255);
            $table->string('kehadiran',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absen_siswas');
    }
};
