<?php
/**
 * Created by PhpStorm.
 * User: sedoy
 * Date: 21.07.17
 * Time: 11:44
 */

require_once __DIR__ . '/../vendor/autoload.php';

use Engine\Cms;
use Engine\DI\DI;

try{
    // Dependency injection
    $di = new DI();

    // Init services
    $services = require __DIR__ . '/Config/Service.php';
    foreach ($services as $service)
    {
        $provider = new $service($di);
        $provider->init($di);
    }

    $cms = new Cms($di);
    $cms->run();

} catch (\ErrorException $e) {
    echo $e->getMessage();
}