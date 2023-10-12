<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnsTypeToRepairOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('repair_orders', function (Blueprint $table) {
            $table->string('phone')->nullable()->change();
            $table->string('serial_number')->nullable()->change();
            $table->string('address')->nullable()->change();
            $table->integer('brand_id')->nullable()->change();
            $table->integer('device_id')->nullable()->change();
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
            $table->string('phone')->nullable(false)->change();
            $table->string('serial_number')->nullable(false)->change();
            $table->string('address')->nullable(false)->change();
            $table->integer('brand_id')->nullable(false)->change();
            $table->integer('device_id')->nullable(false)->change();
        });
    }
}
