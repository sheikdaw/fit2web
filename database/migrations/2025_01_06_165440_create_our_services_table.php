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
        Schema::create('our_services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->text('paragraph_1');
            $table->text('paragraph_2');
            $table->string('icon')->nullable(); // for storing icon image
            $table->string('image_1')->nullable(); // for image 1
            $table->string('image_2')->nullable(); // for image 2
            $table->string('image_3')->nullable(); // for image 3
            $table->string('image_4')->nullable(); // for image 4
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_services');
    }
};
