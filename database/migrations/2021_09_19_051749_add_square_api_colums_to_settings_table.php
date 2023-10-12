<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSquareApiColumsToSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->boolean('square_state')->default(false)->after('portfolio_status');
            $table->boolean('square_sandbox')->default(true);
            $table->string('square_application_id')->nullable();
            $table->string('square_location_id')->nullable();
            $table->string('square_token')->nullable();
            $table->string('square_currency')->nullable();
            $table->string('default_payment_gateway')->nullable();
            $table->string('send_notification')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn('square_state');
            $table->dropColumn('square_sandbox');
            $table->dropColumn('square_application_id');
            $table->dropColumn('square_location_id');
            $table->dropColumn('square_token');
            $table->dropColumn('square_currency');
            $table->dropColumn('default_payment_gateway');
            $table->dropColumn('send_notification');
        });
    }
}
