<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('payment_links', function (Blueprint $table) {
            $table->timestamp('email_queued_at')->nullable()->after('expires_at');
            $table->timestamp('email_sent_at')->nullable()->after('email_queued_at');
            $table->unsignedInteger('email_send_attempts')->default(0)->after('email_sent_at');
            $table->string('email_last_recipient')->nullable()->after('email_send_attempts');
            $table->string('email_last_error', 500)->nullable()->after('email_last_recipient');
        });
    }

    public function down(): void
    {
        Schema::table('payment_links', function (Blueprint $table) {
            $table->dropColumn([
                'email_queued_at',
                'email_sent_at',
                'email_send_attempts',
                'email_last_recipient',
                'email_last_error',
            ]);
        });
    }
};
