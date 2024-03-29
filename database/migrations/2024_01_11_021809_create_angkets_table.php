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
        Schema::create('angket', function (Blueprint $table) {
            // $table->id();
            $table->integer('id_angket',10)->autoIncrement();
            $table->string('jenis_angket')->nullable(false);
            $table->text('foto_angket')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('angket');
    }
};
