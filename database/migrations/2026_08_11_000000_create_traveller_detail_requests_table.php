<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('traveller_detail_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->string('reference')->unique();
            $table->string('token_hash', 64)->unique();
            $table->text('access_token');
            $table->unsignedSmallInteger('expected_travellers');
            $table->string('status')->default('pending');
            $table->timestamp('expires_at')->nullable();
            $table->string('leader_name')->nullable();
            $table->string('leader_email')->nullable();
            $table->string('leader_phone', 40)->nullable();
            $table->string('leader_country', 100)->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone', 40)->nullable();
            $table->timestamp('submitted_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('traveller_detail_requests');
    }
};
