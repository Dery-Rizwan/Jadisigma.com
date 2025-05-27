<?php

// database/migrations/xxxx_xx_xx_xxxxxx_add_columns_to_users_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Tambahkan kolom kita di sini
            $table->foreignId('role_id')->default(2)->constrained('roles')->after('password');
            $table->string('membership_status')->default('basic')->after('role_id');
            $table->date('membership_expiry_date')->nullable()->after('membership_status');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Perintah untuk menghapus kolom jika migrasi di-rollback
            $table->dropForeign(['role_id']);
            $table->dropColumn(['role_id', 'membership_status', 'membership_expiry_date']);
        });
    }
};
