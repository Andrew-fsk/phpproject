<?php

class Model
{
    public $view;
    public $smarty;
    protected $db = null;

    public function __construct()
    {
        require_once( LIBS_PATH . 'Smarty.class.php');

        $this->view = new View();
        $this->smarty = new Smarty();
    }

}