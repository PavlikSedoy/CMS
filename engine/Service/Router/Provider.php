<?php

/**
 * Created by PhpStorm.
 * User: sedoy
 * Date: 23.07.17
 * Time: 13:16
 */

namespace Engine\Service\Router;

use Engine\Service\AbstractProvider;
use Engine\Core\Router\Router;

class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    public $serviceName = 'router';

    /**
     * @return mixed
     */
    public function init()
    {
        $router = new Router('http://cms.loc/');

        $this->di->set($this->serviceName, $router);
    }
}