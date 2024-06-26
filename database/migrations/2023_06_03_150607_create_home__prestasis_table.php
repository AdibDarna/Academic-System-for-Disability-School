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
        Schema::create('home_prestasis', function (Blueprint $table) {
            $table->bigIncrements('id_prestasi');
            $table->string('judul_prestasi', 255);
            $table->string('deskripsi', 765);
            $table->string('foto',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_prestasis');
    }
};
