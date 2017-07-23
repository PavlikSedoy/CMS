<?php

/**
 * Created by PhpStorm.
 * User: sedoy
 * Date: 23.07.17
 * Time: 12:45
 */

namespace Engine\Service;

abstract class AbstractProvider
{
    /**
     * @var \Engine\DI\DI;
     */
    protected $di;

    /**
     * AbstractProvider constructor.
     * @param \Engine\DI\DI $di
     */
    public function __construct(\Engine\DI\DI $di)
    {
        $this->di = $di;
    }

    /**
     * @return mixed
     */
    abstract function init();
}