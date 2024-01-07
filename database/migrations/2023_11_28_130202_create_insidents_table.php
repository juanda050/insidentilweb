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
        Schema::create('insidents', function (Blueprint $table) {
            $table->id();
            $table->string('nama_website');
            $table->string('link_website');
            $table->date('tanggal_kejadian');
            $table->string('peretas');
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insidents');
    }
};
