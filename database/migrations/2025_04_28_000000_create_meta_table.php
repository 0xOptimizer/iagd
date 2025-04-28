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
        Schema::create('species_meta', function (Blueprint $table) {
            $table->id();
            $table->string('species_id');
            $table->integer('count');
            $table->date('latest_entry')->nullable();
        });

        Schema::create('global_meta', function (Blueprint $table) {
            $table->id();
            $table->string('meta_key')->unique();
            $table->text('meta_value');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('global_meta');
        Schema::dropIfExists('species_meta');
    }
};
