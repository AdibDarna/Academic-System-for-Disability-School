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
        Schema::create('absen_gurus', function (Blueprint $table) {
            $table->id();
            $table->string('id_guru',255);
            $table->string('kehadiran',255);
            $table->string('alasan',255);
            $table->string('file',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absen_gurus');
    }
};
