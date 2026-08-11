<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('travellers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('traveller_detail_request_id')->constrained()->cascadeOnDelete();
            $table->unsignedSmallInteger('position');
            $table->string('full_name');
            $table->unsignedTinyInteger('age');
            $table->string('nationality', 100);
            $table->text('dietary_requirements')->nullable();
            $table->text('accessibility_requirements')->nullable();
            $table->text('medical_notes')->nullable();
            $table->timestamps();

            $table->unique(['traveller_detail_request_id', 'position']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('travellers');
    }
};
