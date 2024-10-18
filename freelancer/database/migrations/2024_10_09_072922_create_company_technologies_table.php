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
        Schema::create('company_technologies', function (Blueprint $table) {
            $table->id();
            $table->string('companyname')->nullable();
            $table->biginteger('categoryid')->default(0);
            $table->biginteger('subcategoryid')->default(0);
            $table->biginteger('planid')->default(0);
            $table->biginteger('techid')->default(0);
            $table->string('frontend')->nullable();
            $table->string('backend')->nullable();
            $table->string('database')->nullable();
            $table->string('avg_cost')->nullable();
            $table->string('delivery_time')->nullable();
            $table->string('other_variables')->nullable();
            $table->string('other_variables_one')->nullable();
            $table->longtext('info')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_technologies');
    }
};
