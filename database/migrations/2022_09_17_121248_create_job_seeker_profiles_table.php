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
        Schema::create('job_seeker_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone_number');
            $table->string('gender');
            $table->string('country');
            $table->string('region');
            $table->string('city');
            $table->string('recent_job_title');
            $table->string('recent_employed_at');
            $table->integer('recent_salary');
            $table->integer('total_years_experiance');
            $table->string('summary_about_ur_self');
            $table->string('cv');
            $table->string('linkedin')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('field_of_study_id');
            $table->unsignedBigInteger('profession_id');
            $table->unsignedBigInteger('career_level_id');
            $table->unsignedBigInteger('employement_type_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('field_of_study_id')->references('id')->on('educations');
            $table->foreign('profession_id')->references('id')->on('educations');
            $table->foreign('career_level_id')->references('id')->on('educations');
            $table->foreign('employement_type_id')->references('id')->on('educations');
            $table->foreign('user_id')->references('id')->on('users');


         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_seeker_profiles');
    }
};
