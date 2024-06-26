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
        Schema::create('home_extrakulikulers', function (Blueprint $table) {
            $table->bigIncrements('id_extrakulikuler');
            $table->string('nama_extrakulikuler',255);
            $table->string('pembimbing',255);
            $table->string('nomor_hp',255);
            $table->string('hari',255);
            $table->string('waktu',255);
            $table->string('foto',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_extrakulikulers');
    }
};
