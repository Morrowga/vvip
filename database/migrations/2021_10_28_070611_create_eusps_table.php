<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEuspsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eusps', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id');
            $table->string('sms_no')->nullable();
            $table->string('sms_text')->nullable();
            $table->string('email_address')->nullable();
            $table->string('email_subject')->nullable();
            $table->string('email_body')->nullable();
            $table->string('phone')->nullable();
            $table->string('url')->nullable();
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
        Schema::dropIfExists('eusps');
    }
}
