<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id');
            $table->string('image')->default('logo.jpeg');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('company')->nullable();
            $table->string('position')->nullable();
            $table->string('birthday')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('office')->nullable();
            $table->string('personalemail')->nullable();
            $table->string('office_email')->nullable();
            $table->string('website1')->nullable();
            $table->string('website2')->nullable();
            $table->string('website3')->nullable();
            $table->string('home_street1')->nullable();
            $table->string('home_street2')->nullable();
            $table->string('home_postal_code')->nullable();
            $table->string('home_city')->nullable();
            $table->string('home_state')->nullable();
            $table->string('home_country')->nullable();
            $table->string('work_street1')->nullable();
            $table->string('work_street2')->nullable();
            $table->string('work_postal_code')->nullable();
            $table->string('work_city')->nullable();
            $table->string('work_state')->nullable();
            $table->string('work_country')->nullable();
            $table->string('background_color')->nullable();
            $table->string('text_color')->nullable();
            $table->string('text_highlight_color')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
