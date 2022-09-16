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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('education_id');
            $table->unsignedBigInteger('employer_id')->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->string('salary');
            $table->string('description');
            $table->string('requirement');
            $table->dateTime('date_of_announcement');
            $table->dateTime('date_of_closing');
            // $table->integer('vacancy_number');
            $table->integer('number_position');
            // $table->string('duty_base');
            $table->string('how_to_apply');
            $table->string('apply_link')->nullable();
            $table->enum('type',['order','employer','company']);
            $table->integer('number_click')->default(0);
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('education_id')->references('id')->on('educations');
            $table->foreign('employer_id')->references('id')->on('admins');
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->string('slug');
            $table->softDeletes();
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
        Schema::dropIfExists('jobs');
    }
};
