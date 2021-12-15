<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_cards', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id');
            $table->string('pdf_file')->nullable();
            $table->string('transparnet_front')->nullable();
            $table->string('transparent_back')->nullable();
            $table->string('preview_image')->nullable();
            $table->string('text_color')->nullable();
            $table->string('bg_color')->nullable();
            $table->string('card_logo')->nullable();
            $table->string('description')->nullable();
            $table->string('name')->nullable();
            $table->string('position')->nullable();
            $table->string('finish_card')->default();
            $table->string('user_recieve')->default(0);
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
        Schema::dropIfExists('customer_cards');
    }
}