<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalChargesColumnRepairOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('repair_orders', function (Blueprint $table) {
            $table->float('additional_amount')->default(0)->nullable()->after('is_device_collected');
            $table->boolean('send_notification')->default(true)->default(true)->after('additional_amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('repair_orders', function (Blueprint $table) {
            $table->dropColumn('additional_amount');
            $table->dropColumn('send_notification');
        });
    }
}
