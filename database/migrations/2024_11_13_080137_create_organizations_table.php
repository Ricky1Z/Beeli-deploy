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
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('acronym');
            $table->string('email');
            $table->string('password');
            $table->string('description');
            $table->integer('balance');
            $table->binary('logo');
            $table->string('region');
            $table->integer('phone');
            $table->integer('popularity'); //nambah ketika ada transaksi
            $table->foreignId('university_id')->constrained('universities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};