<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name')->nullable();
            $table->string('phone_number')->unique();
            $table->string('url')->nullable();
            $table->string('secure_status')->default('public');
            $table->string('email')->nullable();
            $table->string('smart_card_design_id')->nullable();
            $table->string('package')->nullable();
            $table->string('package_status')->nullable();
            $table->string('remaining_days')->nullable();
            $table->dateTime('package_start_date')->nullable();
            $table->dateTime('package_end_date')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default('null');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
