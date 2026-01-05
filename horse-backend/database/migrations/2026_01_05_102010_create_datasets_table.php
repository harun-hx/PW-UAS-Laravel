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
        Schema::create('datasets', function (Blueprint $table) {
            $table->id();
            $table->string('breed_name'); // e.g. "Arabian"
            $table->text('description');  // e.g. "Used 500 images from Stanford dataset"
            $table->integer('image_count'); // e.g. 500
            $table->string('sample_image_url')->nullable(); // URL to a photo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datasets');
    }
};
