<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employer_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('agency_license_number');
            $table->string('primary_phone_number');
            $table->string('contact_name');
            $table->boolean('recruiter_company');
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->string('about')->nullable();
            $table->string('logo')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('telegram')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employer_profiles');
    }
};
