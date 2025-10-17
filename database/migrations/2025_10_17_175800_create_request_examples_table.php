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
        Schema::create('request_examples', function (Blueprint $table) {
            $table->id();
            $table->foreignId('endpoint_id')->constrained('endpoints')->cascadeOnDelete();
            $table->string('title')->nullable();
            $table->text('content');
            $table->string('content_type', 100)->default('application/json');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_examples');
    }
};
