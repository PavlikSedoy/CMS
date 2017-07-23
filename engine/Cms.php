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
    public $router;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
        $this->router = $this->di->get('router');
    }

    /**
     * Run CMS
     */
    public function run()
    {
//        $this->router->add('home', '/', 'HomeController:index');
        
        echo '<pre>';
        print_r($this->di);
        echo '</pre>';
    }
}