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
        Schema::create('siswas', function (Blueprint $table) {
            $table->string("nis", 255)->primary();
            $table->string("nama", 255);
            $table->string("tanggal_lahir", 255);
            $table->string("tahun_masuk", 255);
            $table->string("jenis_kelamin", 255);
            $table->unsignedBigInteger("id_disabilitas");
            $table->foreign("id_disabilitas")->references('id_disabilitas')->on('disabilitas')->onDelete('cascade');
            $table->unsignedBigInteger("id_kelas");
            $table->foreign("id_kelas")->references('id_kelas')->on('kelas')->onDelete('cascade');
            $table->string("catatan", 255)->nullable();
            $table->string("foto", 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
