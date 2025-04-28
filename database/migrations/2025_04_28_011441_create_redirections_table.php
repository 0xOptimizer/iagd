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
        Schema::create('redirections', function (Blueprint $table) {
            $table->id();

            $table->string('uuid')->charset('utf8mb4')->collation('utf8mb4_bin')->unique();

            $table->string('request_from');

            $table->string('redirect_to');

            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('redirections');
    }
};
