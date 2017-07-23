<?php
/**
 * Created by PhpStorm.
 * User: sedoy
 * Date: 21.07.17
 * Time: 12:29
 */

namespace Engine;

class Cms
{
    /**
     * @var DI
     */
    private $di;
    public $db;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
    }

    /**
     * Run CMS
     */
    public function run()
    {
        print_r($this->di);

    }
}