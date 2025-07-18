<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('seminar_admin', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // <= HARUS ADA!
            $table->string('kategori');
            $table->string('judul');
            $table->text('deskripsi');
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('poster')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('seminar_admin');
    }
};
