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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('official_name')->nullable();
            $table->string('code', 2)->unique();

            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);

            $table->string('region')->nullable();
            $table->string('subregion')->nullable();
            $table->string('flag')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
