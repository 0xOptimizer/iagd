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
        Schema::create('animal_facilities', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('iagd_number', 255)->comment('also called registration number');
            $table->string('name', 255)->nullable();
            $table->string('image', 255)->nullable();
            $table->text('breeds')->nullable();
            $table->string('address', 255)->nullable();
            $table->string('owner_uuid', 255)->nullable();
            $table->string('owner_name', 255)->nullable();
        });

        Schema::create('animal_facility_co_owners', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('co_owner_uuid', 255)->nullable();
            $table->string('co_owner_name', 255)->nullable();
        });

        Schema::create('animal_facility_links', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('link_type', 255)->nullable();
            $table->string('link_url', 255)->nullable();
        });

        Schema::create('animal_facility_meta', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->tinyInteger('status')->default(5)->comment('0 = deleted; 1 = pending; 2 = approved; 3 = rejected; 4 = user deletion; 5 = private/hidden');
            $table->string('from_system', 255)->nullable();
            $table->string('inserted_by', 255)->nullable()->comment('from website form (by user)');
            $table->string('date_inserted', 255)->nullable()->comment('from website form (by user)');
            $table->string('created_by', 255)->nullable()->comment('from system creation (by admin, usually not on website)');
            $table->string('date_added', 255)->nullable()->comment('row creation date (from either user or admin)');
            $table->string('updated_by', 255)->nullable()->comment('any changes (from either user or admin)');
            $table->string('date_updated', 255)->nullable();
            $table->string('deleted_by', 255)->nullable();
            $table->string('date_deleted', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal_facilities');
        Schema::dropIfExists('animal_facility_co_owners');
        Schema::dropIfExists('animal_facility_links');
        Schema::dropIfExists('animal_facility_meta');
    }
};
