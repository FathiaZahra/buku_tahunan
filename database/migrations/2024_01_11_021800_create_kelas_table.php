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
        Schema::create('kelas', function (Blueprint $table) {
            // $table->id();
            $table->integer('id_kelas',10)->autoIncrement();
            $table->enum('jenis_kelas', ['rplb','rpla','tkja','tkjb'])->nullable(false);
            $table->text('foto_kelas')->nullable(true);
            $table->string('wali_kelas',60)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
