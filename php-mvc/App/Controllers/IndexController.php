<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 21/05/17
 * Time: 19:27
 */

namespace App\Controllers;

use SON\Controller\Action;
use SON\DI\Container;

class IndexController extends Action
{
    public function index()
    {
        $this->view->carros = array("Fiat", "Ford", "Ferrari");
        //$client = new Client(Conn::getDb());
        $client= Container::getModel("Client");
        $this->view->clients = $client->fetchAll();
        $this->render(__FUNCTION__);
    }

    public function contact()
    {
        $this->view->carros = array("Fiat", "Ford", "Ferrari");
        $client= Container::getModel("Client");
        $this->view->clients = $client->find(1);
        $this->render(__FUNCTION__);
    }
}
