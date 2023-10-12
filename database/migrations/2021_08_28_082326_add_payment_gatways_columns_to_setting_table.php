<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaymentGatwaysColumnsToSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->boolean('is_processing_without_pay')->default(true)->after('bt_state');
            $table->boolean('is_accepting_repair_order')->default(true);
            $table->boolean('cod_state')->default(true);
            $table->boolean('stripe_state')->default(false);
            $table->string('stripe_pk')->nullable();
            $table->string('stripe_sk')->nullable();
            $table->string('stripe_currency')->nullable();
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
            $table->dropColumn('is_accepting_repair_order');
            $table->dropColumn('cod_state');
            $table->dropColumn('stripe_state');
            $table->dropColumn('stripe_pk');
            $table->dropColumn('stripe_sk');
            $table->dropColumn('stripe_currency');
            $table->dropColumn('is_processing_without_pay');
        });
    }
}
