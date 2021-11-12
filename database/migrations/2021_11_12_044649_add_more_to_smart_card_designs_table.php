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
            $table->string('preview_bg_color')->nullable()->after('package_token');
            $table->string('preview_text_color')->nullable()->after('preview_bg_color');
            $table->string('default_front_transparent')->nullable()->after('preview_text_color');
            $table->string('default_back_transparent')->nullable()->after('default_front_transparent');
            $table->string('total_transparent')->nullable()->after('default_back_transparent');
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
