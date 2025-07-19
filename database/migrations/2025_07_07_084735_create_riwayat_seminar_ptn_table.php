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
        Schema::create('seminar_ptn', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penonton_id');
            $table->timestamps();

            $table->foreign('penonton_id')->references('id')->on('penontons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_seminar_ptn');
    }
};
