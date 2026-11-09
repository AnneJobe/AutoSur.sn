
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->nullable()->after('name');
            $table->string('last_name')->nullable()->after('first_name');

            $table->string('phone', 25)->unique()->after('last_name');

            $table->string('address')->nullable()->after('email');
            $table->string('photo')->nullable()->after('address');

            $table->timestamp('phone_verified_at')
                  ->nullable()
                  ->after('email_verified_at');

            $table->boolean('is_active')
                  ->default(true)
                  ->after('password');

            $table->string('email')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique(['phone']);

            $table->dropColumn([
                'first_name',
                'last_name',
                'phone',
                'address',
                'photo',
                'phone_verified_at',
                'is_active',
            ]);

            $table->string('email')->nullable(false)->change();
        });
    }
};
