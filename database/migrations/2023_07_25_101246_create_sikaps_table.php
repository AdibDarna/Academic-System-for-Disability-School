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
        Schema::create('sikaps', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            $table->foreign("nis")->references('nis')->on('siswas')->onDelete('cascade');
            $table->unsignedBigInteger('id_kelas');
            $table->foreign("id_kelas")->references('id_kelas')->on('kelas')->onDelete('cascade');
            $table->string("spiritual", 255)->nullable();
            $table->string("sosial", 255)->nullable();
            $table->string("semester", 255)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sikaps');
    }
};
