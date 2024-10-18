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
        Schema::create('technology_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categoryid')->default(0);
            $table->bigInteger('subcategoryid')->default(0);
            $table->bigInteger('planid')->default(0);
            $table->bigInteger('techid')->default(0);
            $table->string('frontend')->nullable();
            $table->string('backend')->nullable();
            $table->string('database')->nullable();
            $table->string('avg_cost')->nullable();
            $table->string('delivery_time')->nullable();
            $table->string('other_variables')->nullable();
            $table->string('other_variables_one')->nullable();
            $table->longText('info')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technology_details');
    }
};
