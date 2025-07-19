<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('seminar_ptn', function (Blueprint $table) {
            $table->unsignedBigInteger('seminar_id')->after('penonton_id')->nullable();

            // Optional: tambahkan foreign key jika ingin
            // $table->foreign('seminar_id')->references('id')->on('seminar_admins')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('seminar_ptn', function (Blueprint $table) {
            $table->dropColumn('seminar_id');
        });
    }
};
