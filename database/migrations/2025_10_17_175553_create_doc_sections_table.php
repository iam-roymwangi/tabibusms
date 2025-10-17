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
        Schema::create('doc_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('version_id')->constrained('api_versions')->cascadeOnDelete();
            $table->foreignId('parent_section_id')->nullable()->constrained('doc_sections')->cascadeOnDelete();
            $table->string('slug', 200)->unique();
            $table->string('title');
            $table->integer('order_index')->default(0);
            $table->longText('content_markdown')->nullable();
            $table->longText('content_html')->nullable();
            $table->foreignId('author_id')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doc_sections');
    }
};
