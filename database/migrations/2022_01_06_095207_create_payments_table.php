<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('encrypt_phone')->nullable();
            $table->string('package')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('payment_amount')->nullable();
            $table->string('location')->nullable();
            $table->string('screenshot_image')->nullable();
            $table->integer('is_valid')->default(0);
            $table->string('status')->nullable();
            $table->string('ip_address')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
