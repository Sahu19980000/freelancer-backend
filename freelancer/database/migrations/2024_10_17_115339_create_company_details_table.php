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
        Schema::create('company_details', function (Blueprint $table) {
            $table->id();
            $table->string('cb_id')->nullable();
            $table->string('companyname')->nullable();
            $table->string('website')->nullable();
            $table->string('empcount_min')->nullable();
            $table->string('empcount_max')->nullable();
            $table->string('no_ofoffice')->nullable();
            $table->string('introduction')->nullable();
            $table->string('revenue')->nullable();
            $table->string('balancesheet')->nullable();
            $table->string('companyvideo')->nullable();
            $table->string('youtubelink')->nullable();
            $table->string('categoryid')->nullable();
            $table->string('subcategoryid')->nullable();
            $table->string('planid')->nullable();
            $table->string('techid')->nullable();
            $table->string('nameoftheproject')->nullable();
            $table->string('projectphoto')->nullable();
            $table->string('projectdescription')->nullable();
            $table->string('projectduration')->nullable();
            $table->string('projectcategory')->nullable();
            $table->string('projectsubcategory')->nullable();
            $table->string('projectcost')->nullable();
            $table->string('picturevideo')->nullable();
            $table->string('otherinfo')->nullable();            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_details');
    }
};
