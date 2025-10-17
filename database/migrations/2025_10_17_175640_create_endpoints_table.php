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
        Schema::create('endpoints', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_id')->constrained('doc_sections')->cascadeOnDelete();
            $table->string('http_method', 10);
            $table->string('path', 255);
            $table->text('summary')->nullable();
            $table->longText('description_markdown')->nullable();
            $table->longText('description_html')->nullable();
            $table->boolean('deprecated')->default(false);
            $table->foreignId('since_version_id')->nullable()->constrained('api_versions')->nullOnDelete();
            $table->foreignId('author_id')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('endpoints');
    }
};
