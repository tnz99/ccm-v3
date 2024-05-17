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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->integer('position');
            $table->foreignId('headline_id')->constrianed();
            $table->string('title');
            $table->boolean('dark_mode')->nullable()->default(false);
            $table->string('color')->nullable();
            $table->string('file_path')->nullable();
            $table->string('cnav_background')->nullable();
            $table->string('animation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
