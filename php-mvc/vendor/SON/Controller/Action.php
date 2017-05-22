<?php

namespace SON\Controller;

abstract class Action
{
    protected $view;
    private $action;

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    protected function render($action, $layout = true)
    {
        $this->action = $action;
        if($layout)
        {
            include_once "../App/Views/layout.phtml";
        }
        else
        {
            $this->content();
        }
    }

    protected function content()
    {
        $current = get_class($this);
        $single  = strtolower($current);
        $single  = end(explode("\\", $single));
        $folder  = str_replace("controller", "", $single);
        include_once "../App/Views/".$folder."/".$this->action.".phtml";
    }
}