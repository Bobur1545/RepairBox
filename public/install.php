<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$kernel->handle(Illuminate\Http\Request::capture());

if (request()->method() == 'POST') {
    switch (request('case')) {
        case 'environment':
            try {
                $domain = request()->getSchemeAndHttpHost();
                $getEnv = file_get_contents(base_path('/.env.example'));
                $getEnv = str_replace('your_domain', $domain, $getEnv);
                $getEnv = str_replace('database_hostname', request('database_hostname'), $getEnv);
                $getEnv = str_replace('database_port', request('database_port'), $getEnv);
                $getEnv = str_replace('database_name', request('database_name'), $getEnv);
                $getEnv = str_replace('database_username', request('database_username'), $getEnv);
                $getEnv = str_replace('database_password', request('database_password'), $getEnv);
                $env = fopen(base_path('/.env'), "w") or die(['message' => 'Cant not open file .env.example']);
                fwrite($env, $getEnv);
                fclose($env);
                echo view('install', ['message' => 'Database credentials saved successfully', 'case' => 'complete']);
            } catch (\Exception $e) {
                echo view('install', ['case' => 'environment', 'error' => $e->getMessage()]);
            }
            break;
        case 'complete':
            try {
                \DB::connection()->getPdo();
                Artisan::call('install:initialize');
                echo view(
                    'install',
                    ['message' => 'Installation completed successfully', 'case' => 'environment', 'path' => request()
                            ->getSchemeAndHttpHost(), 'output' => Artisan::output()]
                );
            } catch (\Exception $e) {
                File::delete(base_path('/.env'));
                echo view('install', ['case' => 'environment', 'error' => $e->getMessage()]);
            }
            break;

        default:
            echo view('install', ['case' => 'environment']);
            break;
    }
} else {
    if (File::exists(storage_path('installed')) && File::exists(base_path('/.env'))) {
        Artisan::call('install:update');
        File::delete(base_path('resources/views/install.blade.php'));
        File::delete(base_path('LocalValetDriver.php'));
        File::delete(public_path('install.php'));
        header("Location: /admin/dashboard");
        die();
    }
    echo view('install', ['case' => 'environment']);
    exit();
}
