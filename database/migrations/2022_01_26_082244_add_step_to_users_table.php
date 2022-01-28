<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStepToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('step_one')->default(0);
            $table->integer('step_two')->default(0);
            $table->dateTime('expired_date')->nullable();
            $table->dateTime('last_expired_date')->nullable();
            $table->string('subscription_times')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('step_one');
            $table->dropColumn('step_two');
            $table->dropColumn('expired_date');
            $table->dropColumn('last_expired_date');
            $table->dropColumn('subscription_times');
        });
    }
}
