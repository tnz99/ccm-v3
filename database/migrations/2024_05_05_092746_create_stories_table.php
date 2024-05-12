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
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('position')->nullable();
            $table->longText('description');
            $table->longText('file_path')->nullable();
            $table->foreignId('headline_id')->constrianed();
            $table->foreignId('gallery_id')->constrianed()->nullable();
            $table->foreignId('timeline_id')->constrianed()->nullable();
            $table->boolean('dark_mode')->nullable()->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stories');
    }
};
