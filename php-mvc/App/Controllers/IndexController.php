<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 21/05/17
 * Time: 19:27
 */

namespace App\Controllers;


use App\Conn;
use App\Models\Client;
use SON\Controller\Action;

class IndexController extends Action
{
    public function index()
    {
        $this->view->carros = array("Fiat", "Ford", "Ferrari");
        $client = new Client(Conn::getDb());
        $this->view->clients = $client->fetchAll();
        $this->render(__FUNCTION__);
    }

    public function contact()
    {
        $this->view->carros = array("Fiat", "Ford", "Ferrari");
        $this->render(__FUNCTION__);
    }
}