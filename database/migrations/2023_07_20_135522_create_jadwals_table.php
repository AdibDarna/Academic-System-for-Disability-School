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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pelajaran');
            $table->foreign("id_pelajaran")->references('id')->on('pelajarans')->onDelete('cascade');
            $table->unsignedBigInteger('id_kelas');
            $table->foreign("id_kelas")->references('id_kelas')->on('kelas')->onDelete('cascade');
            $table->string('semester',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};