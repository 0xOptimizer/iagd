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
        Schema::create('nydus_lounge_link', function (Blueprint $table) {
            $table->id();

            $table->tinyInteger('is_valid')->default(0);
            $table->string('nydus_initiate_token'); // from Register page
            $table->string('nydus_network_token'); // from Lounge
            $table->string('callback_url');

            $table->string('database_id');
            $table->string('user_uuid');
            $table->string('iagd_number')->nullable();
            $table->string('old_iagd_number')->nullable();
            $table->string('email_address')->nullable();
            $table->string('isGoogle')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->string('birth_date')->nullable();
            $table->string('contact_number')->nullable();
            $table->text('address')->nullable();
            $table->tinyInteger('is_email_verified')->default(0);
            $table->tinyInteger('is_premium')->default(0);
            $table->string('status')->nullable();
            $table->string('timezone')->nullable();
            $table->string('referred_by')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nydus_lounge_link');
    }
};
