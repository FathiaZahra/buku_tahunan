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
        Schema::create('fasilitas', function (Blueprint $table) {
            // $table->id();
            $table->integer('id_fasilitas',10)->autoIncrement();
            $table->string('jenis_fasilitas')->nullable(false);
            $table->text('deskripsi')->nullable(false);
            $table->text('foto_fasilitas')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fasilitas');
    }
};
