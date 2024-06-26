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
        Schema::create('gurus', function (Blueprint $table) {
            $table->string("nip",255)->primary();
            $table->string("nama",255);
            $table->string("email",255);
            $table->string("password",255);
            $table->string("tanggal_lahir",255);
            $table->string("jenis_kelamin",255);
            $table->string("bidang",255);
            $table->string("jabatan",255);
            $table->string("tahun_masuk",255);
            $table->string("foto",255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
