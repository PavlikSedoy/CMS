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
    
    $di->set('test', ['db_name' => 'cms_database']);
    $di->set('test2', ['mail' => 'mail_address']);

    $cms = new Cms($di);
    $cms->run();

} catch (\ErrorException $e) {
    echo $e->getMessage();
}