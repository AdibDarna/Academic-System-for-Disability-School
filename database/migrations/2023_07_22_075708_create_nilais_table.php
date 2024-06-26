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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            $table->foreign("nis")->references('nis')->on('siswas')->onDelete('cascade');
            $table->unsignedBigInteger('id_pelajaran');
            $table->foreign("id_pelajaran")->references('id')->on('pelajarans')->onDelete('cascade');
            $table->unsignedBigInteger('id_kelas');
            $table->foreign("id_kelas")->references('id_kelas')->on('kelas')->onDelete('cascade');
            $table->string("nilai_pengetahuan", 255);
            $table->string("nilai_keterampilan", 255);
            $table->string("semester", 255);
            $table->string("note_pengetahuan", 512);
            $table->string("note_keterampilan", 512);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
