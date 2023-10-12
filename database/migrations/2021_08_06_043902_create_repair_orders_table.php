<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_orders', function (Blueprint $table) {
            $table->id();
            $table->string('tracking');
            $table->uuid('uuid')->index();
            $table->boolean('payment_status')->default(0);
            $table->longText('payment_info')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('serial_number');
            $table->string('address');
            $table->text('diagnostics')->nullable();
            $table->float('sub_total');
            $table->float('total_cost')->default(0);
            $table->float('profit');
            $table->float('tax');
            $table->float('total_charges');
            $table->float('pre_paid')->default(0);
            $table->string('completed_at')->nullable();
            $table->integer('brand_id');
            $table->integer('device_id');
            $table->integer('user_id')->nullable();
            $table->integer('repair_priority_id')->default(1);
            $table->integer('repair_status_id')->default(1);
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
        Schema::dropIfExists('repair_orders');
    }
}
