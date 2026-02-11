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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->date('publication_date')->nullable();
            $table->string('language')->nullable();
            $table->integer('pages')->nullable();
            $table->string('format')->nullable();
            $table->string('isbn')->unique()->nullable();
            $table->text('overview')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('category')->nullable();
            $table->string('status')->default('premium');
            $table->decimal('softCopyPrice', 8, 2)->default(0.00);
            $table->decimal('hardCopyPrice', 8, 2)->default(0.00);
            $table->string('rating')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
