<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('pets_files', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('attached_to_uuid')->comment('UUID of the pet this file is attached to');
            $table->string('file_name')->nullable()->comment('original file name');
            $table->string('file_path')->nullable()->comment('path to the file in storage');
            $table->string('file_type')->nullable()->comment('image, video, document, etc.');
            $table->string('file_size')->nullable()->comment('size of the file in bytes');
            $table->string('file_extension')->nullable();
            $table->string('file_mime_type')->nullable();
            $table->string('file_hash')->nullable();
            $table->string('status')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('pets_files');
    }
};