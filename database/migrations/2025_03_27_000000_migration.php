<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('pet_name');
            $table->string('pet_type');
            $table->string('image')->nullable();
        });

        Schema::create('pets_details', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('breed')->nullable();
            $table->string('iagd_number')->nullable();
            $table->string('stars')->nullable();
            $table->string('owner')->nullable();
            $table->string('owner_uuid')->nullable();
            $table->text('co_owner')->nullable();
            $table->text('co_owner_uuid')->nullable();
            $table->text('location')->nullable();
            $table->string('breeder')->nullable();
            $table->string('animal_facility')->nullable();
            $table->string('gender')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('markings')->nullable();
            $table->string('colors_body')->nullable();
            $table->string('colors_eye')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('icgd_number')->nullable();
            $table->string('link')->nullable();
            $table->string('male_parent')->nullable();
            $table->string('male_parent_uuid')->nullable();
            $table->string('female_parent')->nullable();
            $table->string('female_parent_uuid')->nullable();
            $table->string('display_status')->nullable();
        });

        Schema::create('pets_meta', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0=deleted;1=active;2=approved;3=rejected;4=for user verification');
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

        Schema::create('pets_inquiries', function (Blueprint $table) {
            $table->id();
            $table->uuid('inquiry_uuid')->nullable();
            $table->string('pet_name', 255)->nullable();
            $table->string('image', 255)->nullable();
            $table->string('pet_type', 255)->nullable();
            $table->string('breed', 255)->nullable();
            $table->string('date_of_birth', 255)->nullable();
            $table->string('gender', 255)->nullable();
            $table->string('markings', 255)->nullable();
            $table->string('colors_body', 255)->nullable();
            $table->string('colors_eye', 255)->nullable();
            $table->string('weight', 255)->nullable();
            $table->string('height', 255)->nullable();
            $table->string('pet_location', 255)->nullable();
            $table->string('owner', 255)->nullable();
            $table->string('co_owner', 255)->nullable();
            $table->string('owner_location', 255)->nullable();
            $table->string('owner_contact', 255)->nullable();
            $table->string('owner_email', 255)->nullable();
            $table->tinyInteger('status')->default(0)->comment('0=deleted;1=active;2=approved;3=rejected;4=for user verification');
            $table->string('created_by', 255)->nullable();
            $table->string('date_added', 255)->nullable();
            $table->string('updated_by', 255)->nullable();
            $table->string('date_updated', 255)->nullable();
            $table->string('deleted_by', 255)->nullable();
            $table->string('date_deleted', 255)->nullable();
        });
    }

    public function down() {
        Schema::dropIfExists('pets');
        Schema::dropIfExists('pets_details');
        Schema::dropIfExists('pets_meta');
        Schema::dropIfExists('pets_inquiries');
    }
};