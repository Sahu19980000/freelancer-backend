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
        Schema::create('company_technology_image_videos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ct_id');
            $table->text('images')->nullable();
            $table->text('videos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_technology_image_videos');
    }
};
