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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('blog_name'); // Name of the blog
            $table->string('type'); // Blog type
            $table->string('title_1'); // Title 1
            $table->string('title_2'); // Title 2
            $table->text('paragraph_1'); // Paragraph 1
            $table->text('paragraph_2'); // Paragraph 2
            $table->text('paragraph_3'); // Paragraph 3
            $table->date('date'); // Date
            $table->string('category'); // Blog category
            $table->string('customer_name'); // Customer name
            $table->json('advantages'); // JSON column for advantages
            $table->string('created_by'); // Creator's name
            $table->string('testimonial_phara'); // Testimonial paragraph
            $table->string('testimonial_name'); // Name of the testimonial giver
            $table->string('testimonial_by'); // Testimonial by whom
            $table->json('tags'); // Tags in JSON format
            $table->text('project_summary'); // Summary of the blog/project
            $table->integer('rating')->nullable(); // Nullable rating
            $table->integer('ordered_by')->nullable(); // Nullable order reference
            $table->string('image_1')->nullable(); // Image 1 path/URL
            $table->string('image_2')->nullable(); // Image 2 path/URL
            $table->string('image_3')->nullable(); // Image 3 path/URL
            $table->string('image_4')->nullable(); // Image 4 path/URL
            $table->timestamps(); // Timestamps for created_at and updated_at

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
