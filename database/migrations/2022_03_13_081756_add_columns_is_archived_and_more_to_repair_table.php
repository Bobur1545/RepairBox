<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsIsArchivedAndMoreToRepairTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('repair_orders', function (Blueprint $table) {
            $table->boolean('is_archive')->default(false)->after('is_device_collected');
            $table->boolean('is_lock')->default(false);
            $table->boolean('has_warranty')->default(false);
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
            $table->dropColumn('is_archive');
            $table->dropColumn('is_lock');
            $table->dropColumn('has_warranty');
        });
    }
}
