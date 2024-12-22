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
        Schema::create('dataset', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kerusakan_id')->constrained('kerusakan')->onDelete('cascade');
            $table->foreignId('gejala_id')->constrained('gejala')->onDelete('cascade');
            $table->float('probability');
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dataset');
    }
};
