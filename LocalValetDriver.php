<?php

class LocalValetDriver extends LaravelValetDriver
{
    /**
     * Determine if the driver serves the request.
     *
     * @param  string  $sitePath
     * @param  string  $siteName
     * @param  string  $uri
     * @return bool
     */
    public function serves($sitePath, $siteName, $uri)
    {
        return file_exists($sitePath . '/public/index.php') && file_exists($sitePath . '/artisan');
    }

    /**
     * Get the fully resolved path to the application's front controller.
     *
     * @param  string  $sitePath
     * @param  string  $siteName
     * @param  string  $uri
     * @return string
     */
    public function frontControllerPath($sitePath, $siteName, $uri)
    {
        // Shortcut for getting the "local" hostname as the HTTP_HOST
        if (isset($_SERVER['HTTP_X_ORIGINAL_HOST'], $_SERVER['HTTP_X_FORWARDED_HOST'])) {
            $_SERVER['HTTP_HOST'] = $_SERVER['HTTP_X_FORWARDED_HOST'];
        }
        return $sitePath . '/public/install.php';
    }
}
