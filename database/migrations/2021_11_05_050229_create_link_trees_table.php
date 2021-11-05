<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkTreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_trees', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id');
            $table->string('link_image')->nullable();
            $table->json('link_one')->nullable();
            $table->json('link_two')->nullable();
            $table->json('link_three')->nullable();
            $table->json('link_four')->nullable();
            $table->json('link_five')->nullable();
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
        Schema::dropIfExists('link_trees');
    }
}
