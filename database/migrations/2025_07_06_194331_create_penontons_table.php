<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('penontons', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jurusan');
            $table->string('email');
            $table->string('hp');
            $table->unsignedBigInteger('seminar_id');
            $table->string('ktm');
            $table->timestamps();

            $table->foreign('seminar_id')->references('id')->on('seminar_admin')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('penontons');
    }
};