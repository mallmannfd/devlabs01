<?php
/**
 * Created by PhpStorm.
 * User: mallmann
 * Date: 13/07/18
 * Time: 13:41
 */
namespace Bootstrap;

use App\Core\Core;

class Bootstrap
{

    public static function getConfig()
    {
        $environment = 'production';

        if (getenv('DEV_ENVIRONMENT')) {
            $environment = 'development';
        }

        return require 'config/' . $environment . '/config.php';
    }

    public static function startApplication()
    {
        $application = new Core();
        $application->run();
    }
}
