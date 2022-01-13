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
            $table->string('user_url')->nullable();
            $table->string('transparent_front')->nullable();
            $table->string('transparent_back')->nullable();
            $table->string('preview_image')->nullable();
            $table->string('text_color')->nullable();
            $table->string('bg_color')->nullable();
            $table->string('card_logo')->nullable();
            $table->string('description')->nullable();
            $table->string('name')->nullable();
            $table->string('position')->nullable();
            $table->string('qr_position')->nullable();
            $table->integer('finish_card')->default(0);
            $table->integer('user_recieve')->default(0);
            $table->string('package_name')->nullable();
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
