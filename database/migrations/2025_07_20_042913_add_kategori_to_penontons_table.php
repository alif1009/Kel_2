<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('penontons', function (Blueprint $table) {
            $table->string('kategori')->nullable()->after('jurusan'); // atau after kolom lain sesuai urutanmu
        });
    }

    public function down(): void {
        Schema::table('penontons', function (Blueprint $table) {
            $table->dropColumn('kategori');
        });
    }
};
