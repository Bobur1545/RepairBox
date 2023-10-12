<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSmsConfigColumnsToSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->boolean('sms_status')->default(false)->after('stripe_currency');
            $table->string('sms_channel')->nullable();
            $table->string('nexmo_key')->nullable();
            $table->string('nexmo_secret')->nullable();
            $table->string('nexmo_from')->nullable();
            $table->string('twilio_account_sid')->nullable();
            $table->string('twilio_auth_token')->nullable();
            $table->string('twilio_from')->nullable();

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
            $table->dropColumn('sms_status');
            $table->dropColumn('sms_channel');
            $table->dropColumn('nexmo_key');
            $table->dropColumn('nexmo_secret');
            $table->dropColumn('nexmo_from');
            $table->dropColumn('twilio_account_sid');
            $table->dropColumn('twilio_auth_token');
            $table->dropColumn('twilio_from');
        });
    }
}
