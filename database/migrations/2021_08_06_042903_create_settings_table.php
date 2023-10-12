<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('app_name')->default('Repair Box');
            $table->string('app_address')->nullable();
            $table->string('app_phone')->nullable();
            $table->string('app_https')->nullable();
            $table->string('app_url');
            $table->longText('app_about');
            $table->string('app_date_format')->default('L');
            $table->string('app_date_locale')->default('en');
            $table->string('app_default_role')->default('2');
            $table->string('app_background')->nullable();
            $table->string('app_icon')->nullable();
            $table->string('app_locale')->default('en');
            $table->string('app_timezone')->default('UTC');
            $table->boolean('app_user_registration')->default(false);
            $table->string('mail_from_name')->default('Repair Box');
            $table->string('mail_from_address')->nullable();
            $table->string('mail_mailer')->default('log');
            $table->string('mail_host')->nullable();
            $table->string('mail_username')->nullable();
            $table->string('mail_password')->nullable();
            $table->string('mail_port')->default('2525');
            $table->string('mail_encryption')->default('tls');
            $table->string('mailgun_domain')->nullable();
            $table->string('mailgun_endpoint')->nullable();
            $table->string('mailgun_secret')->nullable();
            $table->string('meta_description');
            $table->string('meta_home_title');
            $table->string('meta_keywords');
            $table->boolean('recaptcha_enabled')->default(false);
            $table->string('recaptcha_public')->nullable();
            $table->string('recaptcha_private')->nullable();
            $table->string('currency_symbol')->default('$');
            $table->boolean('currency_symbol_on_left')->default(true);
            $table->float('tax_rate')->default(0);
            $table->boolean('is_tax_fix')->default(false);
            $table->boolean('is_tax_included')->default(false);
            $table->enum('bt_environment', ['sandbox', 'production'])->default('sandbox');
            $table->string('bt_merchant_id')->nullable();
            $table->string('bt_public_key')->nullable();
            $table->string('bt_private_key')->nullable();
            $table->boolean('bt_state')->default(false);
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
        Schema::dropIfExists('settings');
    }
}
