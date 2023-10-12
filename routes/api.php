<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::get('system-config', 'ApiController@proctection')->name('system.config');

Route::group(['namespace' => 'Api'], function () {
    Route::post('/contact-us', 'SupportController@contactUs')->name('contact.us');
    Route::get('files/{file}', 'Media\MediaController@show')->name('files.show');
    Route::post('files', 'Media\MediaController@store')
        ->name('files.store');
    Route::get('quick/replies/list', 'QuickReplyController@quickRepliesList')
        ->name('quick-replies.list');
    Route::get('print/{repairOrder}/repair/order', 'PrintController@repair')
        ->name('repair-orders.print');
    Route::get('print/{repairOrder}/dispatch/info', 'PrintController@dispatchInfo')
        ->name('repair-dispatch.print');
    Route::get('tax/implementation', 'RepairOrderAxillaryController@getTax')
        ->name('repair.get.tax');

    Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
        Route::post('login', 'AuthController@login')
            ->name('auth.login');
        Route::post('logout', 'AuthController@logout')
            ->name('auth.logout');
        Route::post('register', 'AuthController@register')
            ->name('auth.register');
        Route::post('recover', 'AuthController@recover')
            ->name('auth.recover');
        Route::post('reset', 'AuthController@reset')
            ->name('auth.reset');
        Route::get('user', 'AuthController@user')
            ->name('auth.user');
        Route::post('check', 'AuthController@check')
            ->name('auth.check');
    });

    Route::group(['prefix' => 'lang', 'namespace' => 'Language'], function () {
        Route::get('/', 'LanguageController@languageList')
            ->name('language.list');
        Route::get('/{lang}', 'LanguageController@get')
            ->name('language.get');
    });

    Route::group(['prefix' => 'account'], function () {
        Route::post('update', 'AccountController@update')
            ->name('account.update');
        Route::post('password', 'AccountController@password')
            ->name('account.password');
    });

    Route::group(['prefix' => 'repair'], function () {
        Route::post('booking', 'RepairOrderController@store')
            ->name('repair.order.book');
        Route::get('filers', 'RepairOrderAxillaryController@filters')
            ->name('repair-orders.filters');
        Route::get('brand/list', 'RepairOrderAxillaryController@brandList')
            ->name('repair.brand.list');
        Route::post('device/list', 'RepairOrderAxillaryController@brandDevices')
            ->name('repair.device.list');
        Route::post('defect/list', 'RepairOrderAxillaryController@deviceDefects')
            ->name('repair.defect.list');
        Route::post('quick/actions', 'RepairOrderAxillaryController@quickActions')
            ->name('repair-orders.quick.actions');
        Route::post('assign/{repairOrder}/user', 'RepairOrderAxillaryController@assignUser')
            ->name('repair-orders.assign.user');
        Route::post('track', 'RepairOrderAxillaryController@track')
            ->name('repair.track');
        Route::post('pay-due-amount/{repairOrder}', 'RepairOrderAxillaryController@payDueAmount')->name('repair.pay-due');
        Route::post('send/{repairOrder}/reminder', 'RepairOrderAxillaryController@sendDispatchReminder')
            ->name('repair.send.reminder');
    });

    Route::group(['prefix' => 'admin'], function () {
        Route::get('repair-report', 'ReportController@generate')->name('repair.report');
        Route::post('import/brands', 'ImportController@brands')
            ->name('brands.import');
        Route::post('import/devices', 'ImportController@devices')
            ->name('devices.import');
        Route::post('import/defects', 'ImportController@defects')
            ->name('defects.import');

        Route::get('dashboard/states', 'DashboardController@states')
            ->name('dashboard.states');
        Route::get('dashboard/graph', 'DashboardController@annualGraph')
            ->name('dashboard.annual.graph');

        Route::get('backups', 'BackupController@index')
            ->name('backup.index');
        Route::post('backups', 'BackupController@generate')
            ->name('backup.generate');
        Route::patch('backups/{file}/restore', 'BackupController@restore')
            ->name('backup.restore');
        Route::post('backups/{file}/remove', 'BackupController@destroy')
            ->name('backup.destroy');

        Route::get('brands/list', 'BrandController@brandList')
            ->name('brand.list');
        Route::get('devices/list', 'DeviceController@deviceList')
            ->name('device.list');
        Route::post('repair/logs', 'RepairLogController@store')
            ->name('repair-log.store');
        Route::get('users/user/roles', 'UserController@userRoles')
            ->name('users.user-roles');
        Route::get('user/as/technicians', 'UserController@technicians')
            ->name('users.technicians');
        Route::get('roles/permissions', 'UserRoleController@permissions')
            ->name('user-roles.permissions');
        Route::post('languages/sync', 'LanguageController@sync')
            ->name('language.sync');

        Route::group(['prefix' => 'settings'], function () {
            Route::post('setting-optimize', 'SettingController@optimize')
                ->name('settings.optimize');
            Route::get('user-roles', 'SettingController@userRoles')
                ->name('settings.user-roles');
            Route::get('languages', 'SettingController@languages')
                ->name('settings.languages');
            Route::get('general', 'SettingController@getGeneral')
                ->name('settings.get.general');
            Route::post('general', 'SettingController@setGeneral')
                ->name('settings.set.general');
            Route::get('seo', 'SettingController@getSeo')
                ->name('settings.get.seo');
            Route::post('seo', 'SettingController@setSeo')
                ->name('settings.set.seo');
            Route::get('appearance', 'SettingController@getAppearance')
                ->name('settings.get.appearance');
            Route::post('appearance', 'SettingController@setAppearance')
                ->name('settings.set.appearance');
            Route::get('localization', 'SettingController@getLocalization')
                ->name('settings.get.localization');
            Route::post('localization', 'SettingController@setLocalization')
                ->name('settings.set.localization');
            Route::get('authentication', 'SettingAxillaryController@getAuthentication')
                ->name('settings.get.authentication');
            Route::post('authentication', 'SettingAxillaryController@setAuthentication')
                ->name('settings.set.authentication');
            Route::get('outgoing/mail', 'SettingAxillaryController@getOutgoingMail')
                ->name('settings.get.outgoing.mail');
            Route::post('outgoing/mail', 'SettingAxillaryController@setOutgoingMail')
                ->name('settings.set.outgoing.mail');
            Route::get('captcha', 'SettingAxillaryController@getCaptcha')
                ->name('settings.get.captcha');
            Route::post('captcha', 'SettingAxillaryController@setCaptcha')
                ->name('settings.set.captcha');
            Route::get('currency', 'SettingAxillaryController@getCurrency')
                ->name('settings.get.currency');
            Route::post('currency', 'SettingAxillaryController@setCurrency')
                ->name('settings.set.currency');
            Route::get('tax', 'SettingAxillaryController@getTax')
                ->name('settings.get.tax');
            Route::post('tax', 'SettingAxillaryController@setTax')
                ->name('settings.set.tax');
            Route::get('braintree', 'PaymentGatewaysController@getBraintreeApi')
                ->name('settings.get.braintree');
            Route::post('braintree', 'PaymentGatewaysController@setBraintreeApi')
                ->name('settings.set.braintree');
            Route::get('stripe', 'PaymentGatewaysController@getStripeApi')
                ->name('settings.get.stripe');
            Route::post('stripe', 'PaymentGatewaysController@setStripeApi')
                ->name('settings.set.stripe');
            Route::get('cod', 'PaymentGatewaysController@getCodApi')
                ->name('settings.get.cod');
            Route::post('cod', 'PaymentGatewaysController@setCodApi')
                ->name('settings.set.cod');

            Route::get('square', 'PaymentGatewaysController@getSquareApi')
                ->name('settings.get.square');
            Route::post('square', 'PaymentGatewaysController@setSquareApi')
                ->name('settings.set.square');

            Route::get('sms', 'SmsGatewaysController@getSmsApi')
                ->name('settings.get.sms');
            Route::post('sms', 'SmsGatewaysController@setSmsApi')
                ->name('settings.set.sms');

            Route::get('terms', 'SettingAxillaryController@getTerms')
                ->name('settings.get.terms');
            Route::post('terms', 'SettingAxillaryController@setTerms')
                ->name('settings.set.terms');
        });

        Route::apiResource('repair-priorities', 'RepairPriorityController');
        Route::apiResource('repair-statuses', 'RepairStatusController');
        Route::apiResource('faq', 'FaqController');
        Route::apiResource('users', 'UserController');
        Route::apiResource('user-roles', 'UserRoleController');
        Route::apiResource('brands', 'BrandController');
        Route::apiResource('devices', 'DeviceController');
        Route::apiResource('defects', 'DefectController');
        Route::apiResource('repair-orders', 'RepairOrderController');
        Route::apiResource('quick-replies', 'QuickReplyController');
        Route::apiResource('custom-pages', 'CustomPageController');
        Route::apiResource('languages', 'LanguageController');
    });
});
