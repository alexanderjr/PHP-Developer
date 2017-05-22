<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 21/05/17
 * Time: 19:12
 */

namespace App;


use SON\Init\Bootstrap;

class Route extends Bootstrap
{
    protected function initRoutes()
    {
        $routes['home']    = array('route' => '/', 'controller' => 'indexController','action' => 'index');
        $routes['contact'] = array('route' => '/contact', 'controller' => 'indexController','action' => 'contact');
        $this->setRoutes($routes);
    }

}