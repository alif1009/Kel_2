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
        Schema::create('konfirmasi_admin', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('acara_id');
            $table->unsignedBigInteger('user_id');
            $table->enum('status', ['diterima', 'ditolak'])->default('diterima');
            $table->timestamp('waktu_konfirmasi')->useCurrent();
            $table->timestamps();

            $table->foreign('acara_id')->references('id')->on('acara')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konfirmasi_admin');
    }
};
