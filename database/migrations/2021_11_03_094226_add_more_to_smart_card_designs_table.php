<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreToSmartCardDesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('smart_card_designs', function (Blueprint $table) {
            $table->string('default_background_color')->after('back_image')->nullable();
            $table->string('default_transparent_color')->nullable();
            $table->json('front_transparent')->nullable();
            $table->json('back_transparent')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('smart_card_designs', function (Blueprint $table) {
            //
        });
    }
}
