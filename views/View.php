<?php

class View
{
    public $smarty;

    public function __construct()
    {
        require_once( LIBS_PATH . 'Smarty.class.php');
        $this->smarty = new Smarty();
    }

    public function render($data)
    {
         $this->smarty->assign('data', $data);
         $this->smarty->assign('test', 'test');
         $this->smarty->display(TEMPLATE_PATH . 'base.tpl');
    }

    public function out($template, $data = [])
    {
        $this->smarty->assign('data', $data);
        return $this->smarty->fetch('file:' . $template);
    }
}