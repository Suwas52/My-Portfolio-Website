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
        Schema::create('skill_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('skill_title_id');
            $table->foreign('skill_title_id')->references('id')->on('skills')->onDelete('cascade');
            $table->string('skill_name');
            $table->string('skill_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skill_data');
    }
};