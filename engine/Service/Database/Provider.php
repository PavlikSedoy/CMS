<?php

/**
 * Created by PhpStorm.
 * User: sedoy
 * Date: 23.07.17
 * Time: 13:16
 */

namespace Engine\Service\Database;

use Engine\Service\AbstractProvider;
use Engine\Core\Database\Connection;

class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    public $serviceName = 'db';

    /**
     * @return mixed
     */
    public function init()
    {
        $db = new Connection();

        $this->di->set($this->serviceName, $db);
    }
}