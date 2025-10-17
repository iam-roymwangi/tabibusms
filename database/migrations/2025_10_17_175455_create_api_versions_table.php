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
        Schema::create('api_versions', function (Blueprint $table) {
            $table->id();
            $table->string('version_string', 50);
            $table->string('display_name', 100)->nullable();
            $table->boolean('is_current')->default(false);
            $table->timestamp('released_at')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('api_versions');
    }
};
