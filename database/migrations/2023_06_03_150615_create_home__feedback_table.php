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
        Schema::create('home_feedback', function (Blueprint $table) {
            $table->bigIncrements('id_feedback');
            $table->string('nama', 255);
            $table->string('email', 255);
            $table->string('nomor_hp', 255);
            $table->string('isi_pesan', 255);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_feedback');
    }
};
