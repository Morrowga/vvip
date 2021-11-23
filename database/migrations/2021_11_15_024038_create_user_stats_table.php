<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_stats', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('user_ip')->nullable();
            $table->string('user_os')->nullable();
            $table->string('user_browser')->nullable();
            $table->string('user_agent')->nullable();
            $table->string('social_media')->nullable();
            $table->string('device_ip')->nullable();
            $table->string('device_id')->nullable();
            $table->string('device_name')->nullable();
            $table->boolean('nfc_support')->nullable();
            $table->dateTime('used_at')->nullable();
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
        Schema::dropIfExists('user_stats');
    }
}
