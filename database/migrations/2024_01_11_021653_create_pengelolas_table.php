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
        Schema::create('pengelola', function (Blueprint $table) {
            // $table->id();
            $table->integer('id_pengelola',10)->autoIncrement();
            $table->string('nama_pengelola',60)->nullable(false);
            $table->text('foto_pengelola')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengelola');
    }
};
