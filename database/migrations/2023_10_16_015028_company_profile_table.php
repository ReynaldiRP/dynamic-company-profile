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
        Schema::create('company_profile', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('website_logo');
            $table->unsignedBigInteger('company_excellence_id');
            $table->unsignedBigInteger('company_project_id');
            $table->unsignedBigInteger('company_history_id');
            $table->unsignedBigInteger('company_team_id');
            $table->unsignedBigInteger('company_faq_id');
            $table->timestamps();

            $table->foreign('company_excellence_id')->references('id')->on('company_excellences');
            $table->foreign('company_project_id')->references('id')->on('company_projects');
            $table->foreign('company_history_id')->references('id')->on('company_histories');
            $table->foreign('company_team_id')->references('id')->on('company_teams');
            $table->foreign('company_faq_id')->references('id')->on('company_faqs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_profile');
    }
};
