<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToRepairOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('repair_orders', function (Blueprint $table) {
            $table->longText('brand_info')->nullable()->after('repair_status_id');
            $table->longText('device_info')->nullable()->after('brand_info');
            $table->longText('defects_info')->nullable()->after('device_info');
            $table->boolean('is_manual')->default(false)->after('defects_info');
            $table->boolean('is_device_collected')->default(false)->after('is_manual');
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
            $table->dropColumn('brand_info');
            $table->dropColumn('device_info');
            $table->dropColumn('defects_info');
            $table->dropColumn('is_manual');
            $table->dropColumn('is_device_collected');
        });
    }
}
