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
        Schema::create('sambutans', function (Blueprint $table) {
            // $table->id();
            $table->integer('id_sambutan',10)->autoIncrement();
            $table->enum('jenis_sambutan',60)->nullable(false);
            $table->text('deskripsi')->nullable(false);
            $table->text('foto_sambutan')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sambutans');
    }
};
