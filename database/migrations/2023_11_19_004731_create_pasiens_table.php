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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('nim');
            $table->integer('norm');
            $table->string('keluhan');
            $table->string('diagnosa');
            $table->string('tindakan');
            $table->string('terapi');
            $table->enum('status', ['selesai','belum selesai']);
            $table->string('hb');
            $table->string('gd');
            $table->string('au');
            $table->string('co');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
