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
        Schema::create('projects', function (Blueprint $table) {
            $table->id(); // auto-incrementing primary key
            $table->string('project_name'); // Name of the project
            $table->string('type'); // Project type
            $table->string('title_1'); // Title 1
            $table->string('title_2'); // Title 2
            $table->text('paragraph_1'); // Paragraph 1
            $table->text('paragraph_2'); // Paragraph 2
            $table->date('start_date'); // Project start date
            $table->date('end_date'); // Project end date
            $table->string('category'); // Category of the project
            $table->string('customer_name'); // Customer name
            $table->json('advantages'); // JSON column for advantages (5 points)
            $table->text('project_summary'); // Project summary
            $table->integer('rating')->nullable(); // Rating of the project
            $table->integer('ordered_by')->nullable(); // Ordered by (can be a reference to another table)
            $table->timestamps(); // Created at and updated at

            $table->index(['project_name', 'category']); // Indexing project_name and category for faster queries
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
