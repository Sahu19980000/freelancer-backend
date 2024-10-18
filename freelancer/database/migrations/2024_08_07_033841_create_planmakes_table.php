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
        Schema::create('planmakes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categoryid')->default(0);
            $table->bigInteger('subcategoryid')->default(0);
            $table->string('plan_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planmakes');
    }
};
