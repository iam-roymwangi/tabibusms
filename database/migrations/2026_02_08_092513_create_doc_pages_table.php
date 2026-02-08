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
        Schema::create('doc_pages', function (Blueprint $table) {
    $table->id();
    $table->foreignId('doc_category_id')->constrained()->onDelete('cascade');
    $table->string('title'); // e.g., 'Bulk SMS'
    $table->string('slug');
    $table->string('http_method')->nullable(); // POST, GET, etc.
    $table->string('endpoint_url')->nullable(); 
    $table->longText('content'); // Your main documentation text
    $table->json('sample_code')->nullable(); // Store snippets for PHP, Python, etc.
    $table->integer('order')->default(0);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doc_pages');
    }
};
