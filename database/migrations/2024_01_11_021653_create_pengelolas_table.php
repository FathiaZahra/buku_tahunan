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
        Schema::create('pengelolas', function (Blueprint $table) {
            // $table->id();
            $table->integer('id_pengelola',10)->autoIncrement();
            $table->string(tru('nama_pengelola',60)->nullable(false);
            $table->text('foto_pengelola')->nullablee);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengelolas');
    }
};
