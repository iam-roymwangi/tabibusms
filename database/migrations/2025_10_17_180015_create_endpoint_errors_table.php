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
        Schema::create('endpoint_errors', function (Blueprint $table) {
            $table->foreignId('endpoint_id')->constrained('endpoints')->cascadeOnDelete();
            $table->foreignId('error_code_id')->constrained('error_codes')->cascadeOnDelete();
            $table->primary(['endpoint_id', 'error_code_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('endpoint_errors');
    }
};
