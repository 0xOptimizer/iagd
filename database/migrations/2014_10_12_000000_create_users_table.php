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
        Schema::create('users', function (Blueprint $table) {

            $table->id();

            $table->string('uuid')->charset('utf8mb4')->collation('utf8mb4_bin')->unique();

            $table->string('last_name');

            $table->string('first_name');

            $table->string('middle_name');


            $table->string('email_address')->unique();

            $table->timestamp('email_verified_at')->nullable();

            $table->string('password');

            $table->tinyInteger('is_admin'); // 1 = admin | 0 = user

            $table->softDeletes();

            $table->rememberToken();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
