<?php

use App\Enums\UserStatus;
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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('reference_number');
            $table->date('payment_date');
            $table->enum('status',[UserStatus::Pending()->value,UserStatus::Approve()->value,UserStatus::Rejecte()->value])->default(UserStatus::Pending()->value);
            $table->unsignedBigInteger('payment_method_id');
            $table->unsignedBigInteger('order_id');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
