<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('seminar_selesai', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('konfirmasi_admin_id'); // FK ke tabel konfirmasi admin
            $table->timestamps();

            $table->foreign('konfirmasi_admin_id')->references('id')->on('konfirmasi_admin')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('seminar_selesai');
    }
};
