<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('country');
            $table->string('phone_number')->nullable();
            $table->integer('rating')->default(5);
            $table->text('experience');
            $table->string('profile_picture')->nullable();

            $table->string('top_pos')->nullable();
            $table->string('left_pos')->nullable();

            $table->boolean('is_approved')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
