<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSelfRequestNameToSelectedViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('selected_views', function (Blueprint $table) {
            $table->string('self_request_name')->nullable()->after('request_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('selected_views', function (Blueprint $table) {
            $table->dropColumn('self_request_name');
        });
    }
}
